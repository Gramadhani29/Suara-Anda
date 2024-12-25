<?php

use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\PengaduanController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

// Group routes for guest users (unauthenticated)
Route::middleware('guest')->group(function () {
    // Authentication-related routes
    Volt::route('register', 'pages.auth.register')->name('register');
    Volt::route('login', 'pages.auth.login')->name('login');
    Volt::route('forgot-password', 'pages.auth.forgot-password')->name('password.request');
    Volt::route('reset-password/{token}', 'pages.auth.reset-password')->name('password.reset');
});

// Group routes for authenticated users (auth middleware)
Route::middleware('auth')->group(function () {
    // Email verification routes
    Volt::route('verify-email', 'pages.auth.verify-email')->name('verification.notice');
    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');
    Volt::route('confirm-password', 'pages.auth.confirm-password')->name('password.confirm');

    // Resource routes for managing Pengaduan
    Route::resource('pengaduan', PengaduanController::class);
});
