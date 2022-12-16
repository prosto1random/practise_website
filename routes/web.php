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


Route::get('/cart', function () {
    return view('cart');
})->name('cart');


Route::get('/store', function() {
    return view('store');
})->name('store');

Route::get('/liked', function() {
    return view('liked');
})->name('liked');

Route::get('/adding_card', function() {
    return view('adding_card');
})->name('adding_card');
