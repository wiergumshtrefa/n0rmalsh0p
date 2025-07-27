<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('home');
Auth::routes();
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'show'])->name('profile')->middleware('auth');

use App\Http\Controllers\ProfileController;

Route::get('/profile', [ProfileController::class, 'show'])->name('profile')->middleware('auth');