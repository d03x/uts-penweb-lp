<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', AboutController::class)->name('about');
Route::get('/registrasi', RegisterController::class)->name('register');
Route::post('/registrasi/simpan-registrasi', [RegisterController::class, 'store'])->name('register.store');
