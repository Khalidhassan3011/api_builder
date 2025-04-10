<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('welcome');})->name('welcome');

Route::get('/dashboard', function () { return view('dashboard');})->name('dashboard');

Route::prefix('builders')->group(function () {
    Route::get('/easy', function () { return view('builders.easy.index');})->name('builders.easy.index');

    Route::get('/advanced', function () { return view('builders.advanced.index');})->name('builders.advanced.index');
});
