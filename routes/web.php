<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;

// Route::view('/', 'welcome')->name('home');

// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::view('dashboard', 'dashboard')->name('dashboard');
// });

Route::get('/', [dashboardController::class, 'dashboard'])->name('dashboard');

require __DIR__.'/settings.php';
