<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/easy', function () {
    return view('builders.easy.index');
})->name('builders.easy.index');

Route::get('/advanced', function () {
    return view('builders.advanced.index');
})->name('builders.advanced.index');
