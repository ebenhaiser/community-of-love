<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\MasterController;

// Route::view('/', 'welcome')->name('home');

// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::view('dashboard', 'dashboard')->name('dashboard');
// });

Route::get('/', [dashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/anggota', [MasterController::class, 'anggota'])->name('master.anggota');

require __DIR__.'/settings.php';
