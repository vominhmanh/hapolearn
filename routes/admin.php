<?php

namespace App\Http\Controllers\Admin;

//use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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

Route::group(['as' => 'admin.'], function () {
    // Login Routes...
    Route::get('login', [Auth\LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [Auth\LoginController::class, 'login'])->name('login');

    // Logout Routes...
    Route::post('logout', [Auth\LoginController::class, 'logout'])->name('logout');

    // Registration Routes...
    Route::get('register', [Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [Auth\RegisterController::class, 'register'])->name('register');

    // Password Reset Routes...
    Route::get('password/reset', [Auth\ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('password/email', [Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
    Route::get('password/reset/{token}', [Auth\ResetPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('password/reset', [Auth\ResetPasswordController::class, 'reset'])->name('password.update');

    // Password Confirmation Routes...
    Route::get('password/confirm', [Auth\ConfirmPasswordController::class, 'showConfirmForm'])->name('password.confirm');
    Route::post('password/confirm', [Auth\ConfirmPasswordController::class, 'confirm'])->name('password.confirm');

    // Email Verification Routes...
    Route::get('email/verify', [Auth\VerificationController::class, 'show'])->name('verification.notice');
    Route::get('email/verify/{id}/{hash}', [Auth\VerificationController::class, 'verify'])->name('verification.verify');
    Route::post('email/resend', [Auth\VerificationController::class, 'resend'])->name('verification.resend');
});

Route::get('/', function () {
    // Không đi qua controller mà chuyển thẳng đến view luôn
    return view('admin.welcome');
})->name('admin.welcome');


Route::group(['middleware' => ['auth:admin']], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('admin.home');
});
