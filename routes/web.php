<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RoleMiddleware;
use App\Http\Controllers\UserController;

Route::get('/register', function () {
    return view('welcome');
});
// Rute admin

Route::middleware(['role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
});

Route::middleware(['role:user'])->group(function () {
    Route::get('/user/dashboard', [UserDashboardController::class, 'index'])->name('user.dashboard');
});


Route::get('/register', [UserController::class, 'showRegisterForm'])->name('register');
Route::post('/register',[UserController::class, 'submitRegisterForm'])->name('register.submit');

Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'submitLoginForm'])->name('login.submit');