<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PageController;
use Symfony\Component\Console\Input\Input;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\DashboardController;

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

Route::get('/cart', [CartController::class, 'index'])->middleware('auth.basic')->name('cart');

Route::get('/list', [ProductsController::class,'list'] )->name('list');

Route::get('/profile', function () {
    return view('products.profile')->name('profile');
});
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::get('/orders', function () {
    return view('products.orders');
})->name('orders');
Route::get('/about', function () {
    return view('products.about');
})->name('about');

Auth::routes();

Route::get('dashboard',[DashboardController::class, 'index'])->name('dashboard');

    
Route::match(['get', 'post'], '/botman', 'App\Http\Controllers\BotmanController@handle');

Route::post('/search', [ProductsController::class, 'search']);

Route::post('/list', [CartController::class, 'store']);
Route::post('/search/add', [CartController::class, 'searchstore'])->name('add');

Route::get('/profile/{id}', [PageController::class, 'profile']);
Route::put('/profile/{id}', [PageController::class, 'updateProfile']);
Route::get('/checkout/{user_id}', [CartController::class, 'checkout']);
