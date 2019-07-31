<?php

// use App\Product;
// use App\Category;

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
// products
Route::get('/', 'ProductsController@index');
Route::get('/products/{product}', 'ProductsController@show');
Route::get('products/category/{category}',  'ProductsController@slug');

Route::middleware(['auth'])->group(function(){
    // making an order
Route::get('/checkout/{product}', 'ProductsController@check');
// place order
Route::post('/orders/product', 'OrderController@store');
// confirmation message
Route::get('/confirmation', 'OrderController@confirm');
// sholl all user orders
Route::get('/users/{user}', 'UserController@show');
});












