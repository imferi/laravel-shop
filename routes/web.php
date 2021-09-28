<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', \App\Http\Controllers\HomeController::class)->name('index');

// Cart
Route::get('cart',[\App\Http\Controllers\CartController::class, 'index'])->name('cart.index');

Route::post('cart/add/product/{product}', [\App\Http\Controllers\CartController::class, 'addProduct'])
    ->name('cart.add.product');

Route::post('cart/remove/product/{product}', [\App\Http\Controllers\CartController::class, 'removeProduct'])
    ->name('cart.remove.product');



