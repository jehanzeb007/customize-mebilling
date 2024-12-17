<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

// Login and Dashboard Routes
Route::get('/', [LoginController::class, 'showLoginForm'])->name('auth.login');
Route::post('/login', [LoginController::class, 'login'])->name('auth.login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('auth.logout');

// Forgot Password Routes
Route::get('/forgot-password', [LoginController::class, 'showForgotPasswordForm'])
    ->middleware('guest')
    ->name('password.request');

// Forgot Password Link (Sending Reset Link)
Route::post('/forgot-password', [LoginController::class, 'sendResetLink'])
    ->middleware('guest')
    ->name('password.email');

// Password Reset Form
Route::get('/reset-password/{token}', [LoginController::class, 'showResetForm'])
    ->middleware('guest')
    ->name('password.reset');

// Password Update
Route::post('/reset-password', [LoginController::class, 'updatePassword'])
    ->middleware('guest')
    ->name('password.update');

