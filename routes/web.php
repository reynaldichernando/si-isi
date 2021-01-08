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

// Route::get('/', function () {
//     return view('welcome');
// });

// login admin
Route::get('/admin', 'ProductController@showAddProduct')->name('login');
// tambah produk
Route::get('/add-product', 'ProductController@showAddProduct')->name('add_product');
Route::post('/add-product', 'ProductController@addProduct');
// edit produk
Route::get('/edit-product={id}', 'ProductController@showEditProduct')->name('edit_product');
Route::get('/edit-product={id}', 'ProductController@editProduct');