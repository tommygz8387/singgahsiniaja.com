<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/prod', function () {
    return view('pages.product');
});

Route::get('/product', [ProductController::class, 'indexProduct'])->name('product');

// grup controller produk
Route::controller(ProductController::class)->group(function(){
    Route::get('/', 'index')->name('home');
    Route::get('/desc/{id}', 'descProduct')->name('desc.produk');
    Route::get('/desc/trip/{id}', 'descTrip')->name('desc.trip');
});