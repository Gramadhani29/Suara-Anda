<?php

use Illuminate\Support\Facades\Route;
<<<<<<< Updated upstream
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArtikelController;
<<<<<<< Updated upstream
=======
use App\Http\Controllers\AuthenticatedSessionController;
>>>>>>> Stashed changes
=======
use Livewire\Pages\Admin\Dashboard;
>>>>>>> Stashed changes

// Route untuk halaman depan
Route::view('/', 'welcome');

<<<<<<< Updated upstream
// Route untuk dashboard user biasa
Route::view('dashboard', 'dashboard')
=======
Route::view('pengguna/dashboard', 'pengguna.dashboard')
>>>>>>> Stashed changes
    ->middleware(['auth', 'verified', 'user'])  // Pastikan menggunakan alias 'user'
    ->name('pengguna.dashboard');
    // Route::get('/pengguna/artikels', [ArtikelController::class, 'index'])->name('pengguna.artikels.index');
    // Route::get('/pengguna/artikels/{artikel}', [ArtikelController::class, 'show'])->name('pengguna.artikels.show');

<<<<<<< Updated upstream

<<<<<<< Updated upstream
// Grup route untuk admin
Route::middleware(['auth', 'verified', 'admin'])->group(function () {
    // Halaman dashboard admin
    Route::view('admin/dashboard', 'admin.dashboard')->name('admin.dashboard');
=======
Route::view('admin/dashboard', 'admin.dashboard')
    ->middleware(['auth', 'verified', 'admin']) // Pastikan menggunakan alias 'admin'
    ->name('admin.dashboard');
    Route::get('/artikels', [ArtikelController::class, 'index'])->name('artikels.index');
    Route::get('/artikels/create', [ArtikelController::class, 'create'])->name('artikels.create');
    Route::post('/artikels', [ArtikelController::class, 'store'])->name('artikels.store');
    Route::get('/artikels/{artikel}', [ArtikelController::class, 'show'])->name('artikels.show');
    Route::get('/artikels/{artikel}/edit', [ArtikelController::class, 'edit'])->name('artikels.edit');
    Route::put('/artikels/{artikel}', [ArtikelController::class, 'update'])->name('artikels.update');
    Route::delete('/artikels/{artikel}', [ArtikelController::class, 'destroy'])->name('artikels.destroy');
=======
Route::middleware(['auth', 'verified', 'user'])->group(function () {
        Route::get('/dashboard', Dashboard::class)->name('admin.dashboard');
    });
>>>>>>> Stashed changes

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
>>>>>>> Stashed changes

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
