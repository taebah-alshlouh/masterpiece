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
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/shop', function () {
    return view('shop');
});
Route::get('/product-single', function () {
    return view('product-single');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/profile', function () {
    return view('auth.profile');
});



Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});