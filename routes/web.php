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

// page => si isi
Route::get('/', function () {
    $auth = Auth::check();

    return view('home', ['auth' => $auth]);
});
// page => detail produk
Route::get('/detail-product={id}', 'ProductController@showDetailProduct');
// page => login admin
Route::get('/admin', 'AuthController@showFormLogin')->name('login');
Route::post('/admin', 'AuthController@login');

// only for guest
Route::group(['middleware' => ['guest']], function() {
    // page => panggilan rumah
    Route::get('/home-call', 'HomecallController@showForm')->name('confirm_call');
    Route::post('/home-call', 'HomecallController@addTransaction');
    Route::get('/getRegionPrice={id}', 'HomecallController@getPrice');
    // page => produk
    Route::get('/product', 'ProductController@viewProduct');
});

// only for admin
Route::group(['middleware' => ['auth']], function() {
    // page => daftar produk
    Route::get('/product-list', 'ProductController@showProductList');
    // page => tambah produk
    Route::get('/add-product', 'ProductController@showAddProduct')->name('add_product');
    Route::post('/add-product', 'ProductController@addProduct');
    // page => ubah produk
    Route::get('/edit-product={id}', 'ProductController@showEditProduct')->name('edit_product');
    Route::post('/edit-product={id}', 'ProductController@editProduct');
    // page => hapus produk
    Route::get('/delete-product={id}', 'ProductController@deleteProduct');
    // page => pemesanan
    Route::get('/view-transaction', 'TransactionController@showTransaction');
    // page => logout admin
    Route::get('/logout', 'AuthController@logout');
});
