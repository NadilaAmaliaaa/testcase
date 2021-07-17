<?php

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

// Route::get('/', function () {
//     return view('dashboard.index');
// });

Route::get('/', 'katalogController@katalog');

//LOGIN ADMIN & PETUGAS
Route::get('login','logincontroller@index');
Route::post('login/cek', 'logincontroller@cek');
Route::get('/logout', 'logincontroller@logout');

//Register
Route::get('/register/create','registerController@index');
Route::post('register', 'registerController@register ');

//Dashboard Katalog
Route::get('/dashboard', 'katalogController@katalog');

//CRUD PRODUK
Route::get('/produk', 'produkController@produk');
Route::get('/produk/create', 'produkController@create');
Route::post('produk', 'produkController@store');
Route::get('produk/{produk}/edit', 'produkController@edit');
Route::post('produk/{produk}/update', 'produkController@update');
Route::get('produk/{produk}', 'produkController@show');
Route::get('produk/{produk}/delete', 'produkController@delete');
