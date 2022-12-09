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

Route::get('/products/create', [App\Http\Controllers\ProductsController::class, 'create']);

Route::post('/products', [App\Http\Controllers\ProductsController::class, 'store']);

Route::get('/products/{slug}', [App\Http\Controllers\ProductsController::class, 'show']);

Route::get('/products/{slug}/edit', [App\Http\Controllers\ProductsController::class, 'edit'])->name('Products.edit');

Route::patch('/products/{slug}', [App\Http\Controllers\ProductsController::class, 'update'])->name('Products.update');

Route::get('/shop/{slug}', [App\Http\Controllers\ShopsController::class, 'index'])->name('Shop.show');

Route::get('/shop/{slug}/edit', [App\Http\Controllers\ShopsController::class, 'edit'])->name('Shops.edit');

Route::patch('/shop/{slug}', [App\Http\Controllers\ShopsController::class, 'update'])->name('Shops.update');

Route::get('/about', [App\Http\Controllers\AboutController:: class, 'index']);

Route::get('/wine', [App\Http\Controllers\WineController:: class, 'index']);

Route::get('/whisky', [App\Http\Controllers\WhiskyController:: class, 'index']);

Route::get('/gin', [App\Http\Controllers\GinController:: class, 'index']);

Route::get('/beer', [App\Http\Controllers\BeerController:: class, 'index']);

Route::get('/vodka', [App\Http\Controllers\VodkaController:: class, 'index']);






