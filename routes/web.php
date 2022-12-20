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

Route::get('/p/{product}/edit', [App\Http\Controllers\ProductsController::class, 'edit'])->name('Products.edit');

Route::patch('/p/{product}', [App\Http\Controllers\ProductsController::class, 'update'])->name('Products.update');

Route::get('/shop/{user}', [App\Http\Controllers\ShopsController::class, 'index'])->name('Shop.show');

Route::get('/shop/{user}/edit', [App\Http\Controllers\ShopsController::class, 'edit'])->name('Shops.edit');

Route::patch('/shop/{user}', [App\Http\Controllers\ShopsController::class, 'update'])->name('Shops.update');

Route::get('/about', [App\Http\Controllers\AboutController:: class, 'index']);

Route::get('/wine', [App\Http\Controllers\WineController:: class, 'index']);

Route::get('/whisky', [App\Http\Controllers\WhiskyController:: class, 'index']);

Route::get('/gin', [App\Http\Controllers\GinController:: class, 'index']);

Route::get('/beer', [App\Http\Controllers\BeerController:: class, 'index']);

Route::get('/vodka', [App\Http\Controllers\VodkaController:: class, 'index']);

Route::get('/blog', [App\Http\Controllers\BlogController:: class, 'index']);

Route::get('/blog/{slug}', [App\Http\Controllers\BlogController:: class, 'index']);








Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
