<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\TableController;
use Illuminate\Support\Facades\Route;



Route::middleware(['auth', 'admin'])->name('admin.')->prefix('/admin')->group(function(){
    Route::get('/admin', [AdminController::class, 'index'])->name('index');
    Route::resource('/categories', CategoryController::class);
    Route::resource('/menus', MenuController::class);
    Route::resource('/reservation', ReservationController::class);
    Route::resource('/tables', TableController::class);
    Route::resource('/about', AboutController::class);
    });


