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


Route::get('/', [App\Http\Controllers\ProductsController::class, 'index']);

Auth::routes();

Route::post('connect/{user}', [App\Http\Controllers\ConnectsController::class, 'store']);

Route::get('/explore', [App\Http\Controllers\ConnectsController::class, 'index']);

Route::get('/p/create', [App\Http\Controllers\ProductsController::class, 'create']);

Route::post('/p', [App\Http\Controllers\ProductsController::class, 'store']);

Route::get('/p/{product}', [App\Http\Controllers\ProductsController::class, 'show']);

Route::get('/shop/{user}', [App\Http\Controllers\ShopsController::class, 'index'])->name('shop.show');

Route::get('/shop/{user}/edit', [App\Http\Controllers\ShopsController::class, 'edit'])->name('shops.edit');

Route::patch('/shop/{user}', [App\Http\Controllers\ShopsController::class, 'update'])->name('shops.update');



