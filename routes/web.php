<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArtikelController;

// Route untuk halaman depan
Route::view('/', 'welcome');

// Route untuk dashboard user biasa
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified', 'user'])  // Pastikan menggunakan alias 'user'
    ->name('pengguna.dashboard');


// Grup route untuk admin
Route::middleware(['auth', 'verified', 'admin'])->group(function () {
    // Halaman dashboard admin
    Route::view('admin/dashboard', 'admin.dashboard')->name('admin.dashboard');

    // Route artikel hanya untuk admin
    Route::get('admin/artikels', [ArtikelController::class, 'adminIndex'])->name('artikels.admin');
    Route::get('admin/artikels/create', [ArtikelController::class, 'create'])->name('artikels.create');
    Route::post('admin/artikels', [ArtikelController::class, 'store'])->name('artikels.store');
    Route::get('admin/artikels/{artikel}/edit', [ArtikelController::class, 'edit'])->name('artikels.edit');
    Route::put('admin/artikels/{artikel}', [ArtikelController::class, 'update'])->name('artikels.update');
    Route::delete('admin/artikels/{artikel}', [ArtikelController::class, 'destroy'])->name('artikels.destroy');
});

// Route untuk profile user
Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

// Menggunakan auth.php untuk autentikasi
require __DIR__.'/auth.php';
