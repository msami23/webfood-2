<?php

use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\CategoryController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\MenuController;
use App\Http\Controllers\Front\ReservationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/menus', [MenuController::class, 'index'])->name('menus.index');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::get('/reservation', [ReservationController::class, 'index'])->name('reservations.index');
Route::post('/reservation', [ReservationController::class, 'store'])->name('reservations.store');
Route::get('/thankyou', [ReservationController::class, 'thankyou'])->name('thankyou');

