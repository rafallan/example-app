<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return Inertia::render('Home');
})->name('home');

Route::get('/create', [HomeController::class, 'create'])->name('create');

Route::post('/store', [HomeController::class, 'store'])->name('store');

Route::get('/users', [UserController::class, 'index'])->name('users');

Route::get('/users/create', [UserController::class, 'create'])->name('users.create');

Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
