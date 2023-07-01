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

Route::get('/start_order', [\App\Http\Controllers\RawController::class, 'index']);
Route::post('api/fetch-states', [\App\Http\Controllers\RawController::class, 'fetchState']);
Route::post('api/fetch-price', [\App\Http\Controllers\RawController::class, 'fetchPrice']);
Route::post('/add_raw_data', [App\Http\Controllers\RawController::class, 'add_raw_data']);

Route::get('/prod_order', [\App\Http\Controllers\ProdController::class, 'index']);
//    Route::get('/view_category', [AdminController::class, 'view_category']);
//Route::post('/add_category', [AdminController::class, 'add_category']);
//Route::get('/delete_category/{id}', [AdminController::class, 'delete_category']);
