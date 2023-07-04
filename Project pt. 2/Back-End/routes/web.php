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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/redirect', [App\Http\Controllers\HomeController::class, 'redirect']);
//Route::get('/start_order', [App\Http\Controllers\OrderController::class, 'start_order']);

Route::get('view_type', [App\Http\Controllers\OrderController::class, 'view_type']);
Route::get('/delete_type/{id}', [App\Http\Controllers\OrderController::class, 'delete_type']);
Route::post('/add_type', [App\Http\Controllers\OrderController::class, 'add_type']);

Route::get('view_vendor', [App\Http\Controllers\OrderController::class, 'view_vendor']);
Route::get('/delete_vendor/{id}', [App\Http\Controllers\OrderController::class, 'delete_vendor']);
Route::post('/add_vendor', [App\Http\Controllers\OrderController::class, 'add_vendor']);

Route::get('view_product', [App\Http\Controllers\OrderController::class, 'view_product']);
Route::get('/delete_product/{id}', [App\Http\Controllers\OrderController::class, 'delete_product']);
Route::post('/add_product', [App\Http\Controllers\OrderController::class, 'add_product']);

Route::get('view_manufacturer', [App\Http\Controllers\OrderController::class, 'view_manufacturer']);
Route::get('/delete_manufacturer/{id}', [App\Http\Controllers\OrderController::class, 'delete_manufacturer']);
Route::post('/add_manufacturer', [App\Http\Controllers\OrderController::class, 'add_manufacturer']);

Route::get('view_storage', [App\Http\Controllers\OrderController::class, 'view_storage']);
Route::get('/delete_storage/{id}', [App\Http\Controllers\OrderController::class, 'delete_storage']);
Route::post('/add_storage', [App\Http\Controllers\OrderController::class, 'add_storage']);

Route::get('view_transport', [App\Http\Controllers\OrderController::class, 'view_transport']);
Route::get('/delete_transport/{id}', [App\Http\Controllers\OrderController::class, 'delete_transport']);
Route::post('/add_transport', [App\Http\Controllers\OrderController::class, 'add_transport']);

Route::get('/start_order', [\App\Http\Controllers\RawController::class, 'index']);
Route::post('api/fetch-states', [\App\Http\Controllers\RawController::class, 'fetchState']);
Route::post('api/fetch-price', [\App\Http\Controllers\RawController::class, 'fetchPrice']);
Route::post('/add_raw_data', [App\Http\Controllers\RawController::class, 'add_raw_data']);

Route::get('/prod_order', [\App\Http\Controllers\ProdController::class, 'index']);
Route::post('api/fetch-products', [\App\Http\Controllers\ProdController::class, 'fetchProducts']);
Route::post('api/fetch-product-price', [\App\Http\Controllers\ProdController::class, 'fetchPrice']);
Route::post('/add_prod_data', [\App\Http\Controllers\ProdController::class, 'add_prod_data']);

Route::get('/storage_order', [\App\Http\Controllers\StorageController::class, 'index']);
Route::post('api/fetch-unit-price', [\App\Http\Controllers\StorageController::class, 'fetchPrice']);

Route::get('/trans_order', [\App\Http\Controllers\TransController::class, 'index']);
Route::post('api/fetch-trans-price', [\App\Http\Controllers\TransController::class, 'fetchPrice']);

//    Route::get('/view_category', [AdminController::class, 'view_category']);
//Route::post('/add_category', [AdminController::class, 'add_category']);
//Route::get('/delete_category/{id}', [AdminController::class, 'delete_category']);
