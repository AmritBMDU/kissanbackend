<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\LoginController;
use App\Http\Controllers\API\ForgotPasswordController;
use App\Http\Controllers\API\QRCodeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::prefix('api')->middleware(['api'])->group(function () {
//     // Authentication Routes
//     Route::post('login', 'Auth\LoginController@login')->name('login');
//     Route::post('logout', 'Auth\LoginController@logout')->name('logout');
//     Route::post('register', 'Auth\RegisterController@register')->name('register');
//     Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
//     Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
//     Route::get('/register', [LoginController::class, 'loadRegister'])->name('api.register');
    
//     // Add other necessary routes as needed
    
//     // For email verification (optional)
//     Route::post('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
//     Route::post('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');
// });

// Route::post('login', 'API\UserController@login');
// Route::post('register', 'API\UserController@register');
// Route::group(['middleware' => 'auth:api'], function(){
// Route::post('details', 'API\UserController@details');
// });

Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [LoginController::class, 'login']);
Route::middleware('auth:sanctum')->post('user/logout', [LoginController::class, 'logout']);

Route::post('/api/forgot-password', [ForgotPasswordController::class, 'sendResetOtp']);

// routes/web.php or routes/api.php
Route::get('/generate-qr', 'QRCodeController@generateQR');
Route::middleware('auth:sanctum')->post('/scan-qr-code', [QRCodeController::class, 'saveScannedData']);





