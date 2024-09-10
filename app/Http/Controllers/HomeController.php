<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function aboutUs(){
        return view('about-us');
        
    }

 

    public function Solutions(){
        return view('solutions');
        
    }

    public function faq(){
        return view('faq');
        
    }

    public function contactUs(){
        return view('contact-us');
        
    }
    public function PrivacyPolicy(){
        return view('privacy-policy');
        
    }


    public function saveContact(Request $request)
    {
        Log::info('contact saved',['contact'=>$request->all()]);

        try {
            // Create a new Contact instance and fill it with the request data
            $contact = new Contact();
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->phone = preg_replace('/[^0-9]/', '', $request->phone); // Remove formatting from phone number
            $contact->message = $request->message;
            $contact->subject = $request->subject;

            // Save the contact record to the database
            $contact->save();
            Log::info('contact saved',['contact'=>$contact]);
      // Send an email notification
      Mail::send([], [], function ($message) use ($contact) {
        $message->to('sales@ringless.pro.com')
                ->subject('New Contact Form Submission')
                ->setBody("Name: {$contact->name}\nEmail: {$contact->email}\nPhone: {$contact->phone}\nMessage: {$contact->message}\nSubject: {$contact->subject}");
    });
            
            // Optionally, you can return a response or redirect the user
            return response()->json(['message' => 'Contact information saved successfully'], 200);
        } catch (\Exception $e) {
            // Log the error or perform any necessary actions silently
            \Log::error('Error sending email: ' . $e->getMessage());
            
            // Return a success response to the user
            return response()->json(['message' => 'Contact information saved, but email sending failed'], 200);
        }
    }

   

 
 

    


    
        }
    

