<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified', 'user'])  // Pastikan menggunakan alias 'user'
    ->name('dashboard');

Route::view('admin/dashboard', 'admin.dashboard')
    ->middleware(['auth', 'verified', 'admin']) // Pastikan menggunakan alias 'admin'
    ->name('admin.dashboard');


Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';