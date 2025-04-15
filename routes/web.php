<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Builders\ProjectAdvancedController; // Import the controller
use App\Http\Middleware\RedirectIfNotAuthenticated;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('welcome');})->name('welcome');

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(RedirectIfNotAuthenticated::class)->group(function () {
    Route::get('/dashboard', function () { return view('dashboard');})->name('dashboard');

    Route::prefix('builders')->group(function () {
        Route::get('/easy', function () { return view('builders.easy.index');})->name('builders.easy.index');

        // Routes for Advanced Builder
        Route::get('/advanced', [ProjectAdvancedController::class, 'index'])->name('builders.advanced.index'); // Use controller index method
        Route::post('/advanced', [ProjectAdvancedController::class, 'store'])->name('builders.advanced.store'); // Add POST route for storing
    });
});
