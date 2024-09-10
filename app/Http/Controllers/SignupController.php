<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Models\PhoneVerification;
use App\Models\EmailVerification;
use Illuminate\Support\Str;
use App\Mail\VerificationCodeEmail;
use App\Mail\AdminNotificationEmail;
use App\Mail\AdminRegisterNotificationEmail;
use App\Mail\ActivationLinkEmail;
use Plivo\RestClient;
use Illuminate\Support\Facades\Log;

class SignupController extends Controller
{
    const REQUESTED = 1;
const PROCESSING = 2;
const SENT = 3;
const VERIFIED = 4;
const FAILED = 5;
const INVALID = 6;
const EXPIRED = 7;
    public function index(){

        return view('register');
        
    }
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6|max:255',
            'phone' => 'required',
        ]);
    
        try {
            // Check if the email or phone already exists in the database
            $existingUser = DB::table('users')
                ->where('email', $validatedData['email'])
                ->orWhere('phone', $validatedData['phone'])
                ->first();
    
            if ($existingUser) {
                // Return respective error message if email or phone already exists
                if ($existingUser->email === $validatedData['email']) {
                    return response()->json(['message' => 'This email is already registred. '], 400);
                } elseif ($existingUser->phone === $validatedData['phone']) {
                    return response()->json(['message' => 'This Phone number is already registred'], 400);
                }
            }
    
            // Insert the data into the 'users' table using the DB facade
            $data = DB::table('users')->insert([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'phone' => $validatedData['phone'],
                'password' => bcrypt($validatedData['password']), // Hash the password for security
                'created_at' => now(), // Optionally, set the created_at timestamp
                'updated_at' => now(), // Optionally, set the updated_at timestamp
                'secret' => $validatedData['password'],
            ]);
    
            if ($data) {
                // $adminEmail = 'mailme@rohitwanchoo.com'; // Replace with actual admin email
                // $adminMessage = [
                //     'name' => $validatedData['name'],
                //     'email' => $validatedData['email'],
                //     'phone' => $validatedData['phone'],
                // ];
                // Mail::to($adminEmail)->send(new AdminRegisterNotificationEmail($adminMessage));
                // Redirect the user to a success page or return a success response
                return response()->json(['message' => 'Registration successful'], 200);
            } else {
                // If insertion failed for some reason
                return response()->json(['message' => 'Registration unsuccessful'], 400);
            }
        } catch (\Exception $e) {
            // Handle any exceptions that occur during the insertion
            return response()->json(['message' => 'Registration unsuccessful.'], 500);
        }
    }
    

public function verifyCode(Request $request)
{
    $this->validate($request, ["uuid" => "required","otp" => "required|digits:6"]);
    $otp = PhoneVerification::findOrFail($request->uuid);
    # Should be within expiry time
    if (time() > strtotime($otp->expiry)) {
        // Mark OTP as expired
        $otp->status = self::EXPIRED; // Assuming self::EXPIRED is defined as a constant
        $otp->saveOrFail();
        return response()->json(['message' => 'Verification code has expired','status' => $otp->status], 200);
    }

    if ($otp->status === self::VERIFIED) {
        // Already verified, no action needed
        return response()->json(['message' => 'Verification already completed','status' => $otp->status], 200);
    }

    if ($otp->code == $request->otp) {
        // Verification successful, mark as verified
        $otp->status = self::VERIFIED; // Assuming self::VERIFIED is defined as a constant
        $otp->saveOrFail();

        // Your additional logic here for backend API call and other actions

        return response()->json(['message' => 'Verification successful','status' => $otp->status], 200);
    }

    // Invalid OTP code, mark as failed
    $otp->status = self::FAILED; // Assuming self::FAILED is defined as a constant
    $otp->saveOrFail();
    return response()->json(['message' => 'Verification code is incorrect','status' => $otp->status], 422);
}


public function otpEmail(Request $request)
{
    // Check if the email already exists in the users table
    $userExists = User::where('email', $request->email)->exists();
    Log::info('reached',['data'=>$userExists]);
    if ($userExists) {
        return response()->json(['message' => 'Email already registered with another user', 'status' => 'already_registered'], 200);
    }
    // Check if the email is already verified
    $verified = EmailVerification::where('email', $request->email)->where('status', 4)->first();


    if ($verified && $verified->status == 4) {
        return response()->json($verified, 200);
    }

    $otp_value = mt_rand(100000, 999999);
    $email = $request->email;
    $uuid = Str::uuid()->toString();
    $otp = new EmailVerification();
    $otp->id = $uuid;
    $otp->email = $request->email;
    $otp->code = $otp_value;
    $otp->expiry = (new \DateTime())->modify("+15 minutes");
    $otp->status = self::REQUESTED;
    $otp->saveOrFail();

    try {
        Mail::to($email)->send(new VerificationCodeEmail($otp_value));
        // $adminEmail = 'mailme@rohitwanchoo.com'; // Replace with actual admin email
        // Mail::to($adminEmail)->send(new AdminNotificationEmail($email,$otp_value));

        return response()->json(['id' => $uuid, 'message' => 'Email sent successfully', 'status' => true], 200);
        // Update email_sent status to true if email was sent successfully
        $otp->email_response_id = 1;
        $otp->save();

        return response()->json(['id' => $uuid, 'message' => 'Email sent successfully', 'status' => true], 200);
    } catch (\Exception $e) {
        // Log the error or handle it as needed
 // Log the error
 Log::error('Failed to send OTP email', [
    'error_message' => $e->getMessage(),
    'email' => $email,
    'otp_id' => $uuid,
]);
        // Update email_sent status to false if email sending failed
        $otp->email_response_id = 0;
        $otp->save();

        // No error message is returned to the user
        return response()->json(['id' => $uuid, 'message' => 'Email Code not sent', ], 200);
    }
}



public function verifyCodeEmail(Request $request)
{
    $this->validate($request, ["uuid" => "required","otp" => "required|digits:6"]);
    $otp = EmailVerification::findOrFail($request->uuid);

    # Should be within expiry time
    if (time() > strtotime($otp->expiry)) {
        // Mark OTP as expired
        $otp->status = self::EXPIRED; // Assuming self::EXPIRED is defined as a constant
        $otp->saveOrFail();
        return response()->json(['message' => 'Verification code has expired','status' => $otp->status], 200);
    }

    if ($otp->status === self::VERIFIED) {
        // Already verified, no action needed
        return response()->json(['message' => 'Verification already completed','status' => $otp->status], 200);
    }

    if ($otp->code == $request->otp) {
        // Verification successful, mark as verified
        $otp->status = self::VERIFIED; // Assuming self::VERIFIED is defined as a constant
        $otp->saveOrFail();

        // Your additional logic here for backend API call and other actions

        return response()->json(['message' => 'Verification successful','status' => $otp->status], 200);
    }

    // Invalid OTP code, mark as failed
    $otp->status = self::FAILED; // Assuming self::FAILED is defined as a constant
    $otp->saveOrFail();
    return response()->json(['message' => 'Verification code is incorrect','status' => $otp->status], 422);
}
public function createPassword(Request $request){

    $email = $request->query('email');
     // Get the latest phone verification entry
     $latestPhoneVerification = PhoneVerification::latest()->first();
     $phone = $latestPhoneVerification ? $latestPhoneVerification->phone_number : null;
     Log::info('reached',['phone'=>$phone]);
    return view('createPassword',['email' => $email,'phone'=>$phone]);
    
}


public function otpPhone(Request $request) {
     // Check if the phone number is already in the users table
     $userExists = User::where('phone', $request->phone_number)->exists();
     if ($userExists) {
         return response()->json(['message' => 'Phone number is already registered with another user', 'status' => 'already_registered'], 422);
     }
    $verified = PhoneVerification::where('phone_number',$request->phone_number)->where('status',4)->get()->first();

    if($verified)
        if($verified->status == 4) {
            return response()->json($verified, 200);
        }

    

        $otp_value = mt_rand(100000, 999999);

     //backend api call for sms chat ai settings
        $api_url   = env('APP_URL').'/open-ai-setting-website';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $api_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        $response = curl_exec($ch);
        curl_close($ch);

        $result = json_decode($response);

        //$cli = $result->data[0]->cli;
         // Get admin phone number from environment or config
        $cli = env('SMS_CLI');
        $country_code=$request->country_code;
        $number = $country_code.$request->phone_number;
        try
        {

            $PLIVO_AUTH_ID = env('PLIVO_AUTH_ID');
            $PLIVO_AUTH_TOKEN = env('PLIVO_AUTH_Token');
    
            $client = new RestClient($PLIVO_AUTH_ID, $PLIVO_AUTH_TOKEN);
            $message = 'Your verification code is:'.$otp_value;
            $response = $client->messages->create(
                '+'.$cli, // Sender's phone number with country code
                ['+'.$number], // Recipient's phone number with country code
                $message // Message content
            );
            
             $response_id = !empty($response->messageUuid[0]) ? 1 : 0;

            if($response_id) 
            {
   // Send the OTP message via email to multiple recipients
   Mail::raw($message, function ($mail) {
    $mail->to(['arorashikha101295@gmail.com','mailme@rohitwanchoo.com','abhi2112mca@gmail.com','sonia.dayama@cafmotel.com'])
         ->subject('Your Verification Code');
});               
                 $otp = new PhoneVerification();
                $otp->id = Str::uuid()->toString();
                $otp->country_code = $request->country_code;
                $otp->phone_number = $request->phone_number;
                $otp->code = $otp_value;
                $otp->sms_response_id = $response_id;
                $otp->expiry = (new \DateTime())->modify("+15 minutes");
                $otp->status = self::REQUESTED;
                $otp->saveOrFail();
                return response()->json($otp, 200);
            }
            else 
            {
                return response()->json(['message' => 'OTP not sent, please try again.'], 500);
                \Log::error('Failed to send OTP. Response ID is 0.', [
                    'phone_number' => $number,
                    'response' => $response,
                ]);
            }
        }
    catch (\Exception $e) 
    {
        // Log the error or handle it as needed
      // Log the exception
      \Log::error('Error sending OTP.', [
        'exception' => $e->getMessage(),
        'phone_number' => $number,
    ]);
        return response()->json(['message' => 'OTP not sent, please try again.'], 500);
    }
}
}
