<?php

use App\Product;
use App\Category;

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
Route::get('/', 'ProductsController@index');
Route::get('/products/', 'ProductsController@show');
Route::get('/products/{category}',  'ProductsController@slug');

Route::get('/checkout/{product}', function (Product $product) {
    return view('pages.checkout', [
        'product' => $product
    ]);
});
