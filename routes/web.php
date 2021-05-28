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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('authroles', 'AuthRolesController');
Route::resource('/', 'ControllerProducts');
Route::resource('product', 'ControllerProducts');

Route::resource('/mostrarPedidos', 'ControllerPedido');
Route::resource('/mostrarDetalle', 'ControllerDetalles');

Route::post('/cart-index', 'ControllerDetalles@index')->name('cart.index');
Route::resource('verPedido', 'ControllerVerPedidos');

//rutas carrito de compras
Route::post('/cart-add', 'CartController@add')->name('cart.add');
Route::get('/cart-checkout', 'CartController@cart')->name('cart.checkout');
Route::post('/cart-clear', 'CartController@clear')->name('cart.clear')<
Route::post('/cart-removeitem', 'Cartcontroller@removeitem')->name('cart.removeitem');
Route::get('/cart-procesarpedido', 'Cartcontroller@procesarpedido')->name('cart.procesarpedido');


