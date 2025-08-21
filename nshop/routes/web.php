<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CartController;

// Главная страница
Route::get('/', [MainController::class, 'index'])->name('home');

// Аутентификация (только один раз)
Auth::routes();

// Home маршрут (только один раз)
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Профиль
Route::get('/profile', [ProfileController::class, 'show'])->name('profile')->middleware('auth');

// Каталог
Route::get('/catalog', function () {
    return view('catalog');
})->name('catalog');

// Корзина
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::post('/cart/add/{productId}', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/remove/{productId}', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/cart/update/{productId}', [CartController::class, 'update'])->name('cart.update');
Route::post('/cart/clear', [CartController::class, 'clear'])->name('cart.clear');