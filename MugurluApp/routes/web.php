<?php

use Illuminate\Support\Facades\Auth;
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

Route::resource('/', 'App\Http\Controllers\ProductsController');
// Route::post('/home', 'App\Http\Controllers\ProductsController@store');
Route::get('/cart', function () {
    return view('products.cart');
})->name('cart');
Route::get('/list', function () {
    return view('products.list');
})->name('list');
Route::get('/profile', function () {
    return view('products.profile')->name('profile');
});
Route::get('/contact', function () {
    return view('products.contact')->name('contact');
});

Route::get('/orders', function () {
    return view('products.orders');
})->name('orders');
Route::get('/about', function () {
    return view('products.about');
})->name('about');

Auth::routes();

Route::get('dashboard', ['middleware' => 'admin', function () {
    return view('products.dashboard');
}])->name('dashboard');
