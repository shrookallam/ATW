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
    return view('auth.login');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
Route::get('/home', 'HomeController@index')->name('home');
//users
Route::get('/users', 'user\UserController@index')->name('users');
Route::get('/Newusers', 'user\UserController@create')->name('createusers');
Route::post('/Newuser', 'user\UserController@store')->name('createuser');
Route::get('/editUser/{id}', 'user\UserController@edit')->name('edituser');
Route::post('/UpdateUser/{id}', 'user\UserController@update')->name('updateuser');
Route::get('/Deleteuser/{id}', 'user\UserController@destroy')->name('deleteuser');

//products
Route::get('/products', 'Product\ProductController@index')->name('Products');
Route::get('/NewProducts', 'Product\ProductController@create')->name('createproducts');
Route::post('/NewProduct', 'Product\ProductController@store')->name('createProduct');
Route::get('/editProduct/{id}', 'Product\ProductController@edit')->name('editProduct');
Route::post('/UpdateProduct/{id}', 'Product\ProductController@update')->name('updateProduct');
Route::get('/DeleteProduct/{id}', 'Product\ProductController@destroy')->name('deleteProduct');

});
