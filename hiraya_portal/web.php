<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('login.process');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::post('/signup', [AuthController::class, 'signup'])->name('signup.process');