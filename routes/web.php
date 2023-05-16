<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('customers', CustomerController::class);

// Route::resource('orders', OrderController::class);

// Route::get('products', [ProductController::class, 'index'])->name('products.index');

Route::resource('orders', 'App\Http\Controllers\OrderController');

Route::resource('products', 'App\Http\Controllers\ProductController');



