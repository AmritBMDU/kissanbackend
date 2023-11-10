<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Dashboard\ActiveUsersController;
use App\Http\Controllers\Dashboard\QrCodeController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\SubAdminController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
Use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UploadFileController;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/register', [LoginController::class, 'loadRegister']);
Route::post('/register', [LoginController::class, 'register'])->name('register');
// Route::get('/login', [LoginController::class, 'loadLogin']);
// Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout']);



Route::group(['prefix' => 'super-admin','middleware'=>['web','isSuperAdmin']],function(){
    Route::get('/dashboard',[SuperAdminController::class,'dashboard']);

    Route::get('/users',[SuperAdminController::class,'users'])->name('superAdminUsers');
    Route::get('/manage-role',[SuperAdminController::class,'manageRole'])->name('manageRole');
    Route::post('/update-role',[SuperAdminController::class,'updateRole'])->name('updateRole');
});

// ********** Sub Admin Routes *********
Route::group(['prefix' => 'sub-admin','middleware'=>['web','isSubAdmin']],function(){
    Route::get('/dashboard',[SubAdminController::class,'dashboard']);
});

// ********** Admin Routes *********
Route::group(['prefix' => 'admin','middleware'=>['web','isAdmin']],function(){
    Route::get('/dashboard',[AdminController::class,'dashboard']);
});

// ********** User Routes *********
Route::group(['middleware'=>['web','isUser']],function(){
    Route::get('/dashboard',[UserController::class,'dashboard']);
});

Route::get('/electrican-all-user',[ActiveUsersController::class,'electrician']);
Route::get('/dealer-all-user',[ActiveUsersController::class,'dealer']);
Route::get('/partner-all-user',[ActiveUsersController::class,'partner']);

Route::get('/qrcode',[QrCodeController::class,'qrCode']);
Route::get('/qr-code-view',[QrCodeController::class,'qrCodeView']);
Route::post('/upload-excel', [UploadFileController::class, 'uploadExcel'])->name('upload-excel');
Route::get('/qr-code',[QrCodeController::class,'qr_Code']);