<?php

use Illuminate\Support\Facades\Route;

Route::get('/login',function(){
    return view('auth.login');
    return view('index');
})->name('login');

//Route::get('/', [App\Http\Controllers\CartController::class, 'shop'])->name('shop');
Route::get('/cart', [App\Http\Controllers\CartController::class, 'cart'])->name('cart.index')->middleware('auth');
//Route::get('/checkout', [App\Http\Controllers\CheckoutController::class, 'index'])->name('checkout.index')->middleware('auth');

Route::resource('checkout', App\Http\Controllers\CheckoutController::class)->middleware('auth');

//Route::get('/checkout', 'App\Http\Controllers\CheckoutController@store')->name('checkout.store')->middleware('auth');
//Route::post('/checkout', 'App\Http\Controllers\CheckoutController@create')->name('checkout.create')->middleware('auth');
//Route::post('/chec', [App\Http\Controllers\CheckoutController::class, 'clear'])->name('checkout.clear');
Route::post('/add', [App\Http\Controllers\CartController::class, 'add'])->name('cart.store');
Route::post('/update', [App\Http\Controllers\CartController::class, 'update'])->name('cart.update');
Route::post('/remove', [App\Http\Controllers\CartController::class, 'remove'])->name('cart.remove');
Route::post('/clear', [App\Http\Controllers\CartController::class, 'clear'])->name('cart.clear');
//Route::post('/verduras', [App\Http\Controllers\VerdurasController::class, 'index'])->name('verduras');




Route::get('/about', 'App\Http\Controllers\AboutController@index')->name('About')->middleware('auth');
//Route::get('/cart', 'CartController@index')->name('cart');
//Route::get('/checkout', 'App\Http\Controllers\CheckoutController@index')->name('checkout')->middleware('auth');

Route::get('/contact', 'App\Http\Controllers\ContactController@index')->name('contact')->middleware('auth');
Route::get('/news', 'App\Http\Controllers\NewsController@index')->name('news')->middleware('auth');
Route::get('/shop', 'App\Http\Controllers\ShopController@index')->name('shop')->middleware('auth');

Route::get('/portfolio', 'App\Http\Controllers\PortfolioController@index')->name('portfolio')->middleware('auth');
Route::get('/abarrotes', 'App\Http\Controllers\AbarrotesController@index')->name('abarrotes')->middleware('auth');
Route::get('/bebidas', 'App\Http\Controllers\BebidasController@index')->name('bebidas')->middleware('auth');
Route::get('/comidas', 'App\Http\Controllers\ComidasController@index')->name('comidas')->middleware('auth');
Route::get('/embutidos', 'App\Http\Controllers\EmbutidosController@index')->name('embutidos')->middleware('auth');
Route::get('/higiene', 'App\Http\Controllers\HigieneController@index')->name('higiene')->middleware('auth');
Route::get('/licores', 'App\Http\Controllers\LicoresController@index')->name('licores')->middleware('auth');
Route::get('/verduras', 'App\Http\Controllers\VerdurasController@index')->name('verduras')->middleware('auth');

Route::view('/contactos','contactos')->name('contactos');


Auth::routes(['reset'=>false]);

Route::get('/home', [App\Http\Controllers\IndexController::class, 'index']);

Route::group(['middleware' => 'auth'], function () {

  Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('home');
});