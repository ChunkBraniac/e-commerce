<?php

use App\Http\Controllers\AddItemController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home.page');

Route::get('/add_item', [AddItemController::class, 'add_item'])->name('add_item.page');

Route::post('/add_item', [AddItemController::class, 'store'])->name('add_item.store');