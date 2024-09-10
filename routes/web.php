<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SignupController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/contact-us', [HomeController::class, 'contactUs']);
Route::post('/save-contact-us', [HomeController::class, 'saveContact']);
Route::get('/about-us', [HomeController::class, 'aboutUs']);
Route::get('/faq', [HomeController::class, 'faq']);
Route::get('/solutions', [HomeController::class, 'Solutions']);
Route::get('/privacy', [HomeController::class, 'PrivacyPolicy']);
Route::get('/sign-up', [SignupController::class, 'index'])->name('signup');
Route::post('/store', [SignupController::class, 'store']);
Route::get('/verify-code', [SignupController::class, 'verifyCode'])->name('verifyCode');
Route::post('/store-verify-code', [SignupController::class, 'StoreVerifyCode']);
Route::get('/resend-code/{userId}', [SignupController::class, 'resendCode'])->name('resend-code');
Route::post('/verifyCode', [SignupController::class, 'verifyCode']);
Route::post('signup/otp/phone', [SignupController::class, 'otpPhone'])->name('sign-otp-phone');
Route::post('otp/email', [SignupController::class, 'otpEmail'])->name('otp-email');
Route::post('/verifyCodeEmail', [SignupController::class, 'verifyCodeEmail']);
Route::get('/sign-up/password', [SignupController::class, 'createPassword']);