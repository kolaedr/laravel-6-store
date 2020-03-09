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
//     return view('welcome');
// });


Auth::routes();

// Route::get('/', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@productList');
Route::get('/product/{slug}', 'HomeController@product');
Route::get('/category/{slug}', 'HomeController@categorySingle');


Route::group(
    ['prefix'=>'/admin',
    'namespace'=>'Admin',
    'middleware'=>['auth', 'admin']
    ], function(){

        Route::get('/', 'AdminController@index');
        Route::get('/product', 'AdminController@getProductList');
        // Route::delete('/product/{id}', 'AdminController@destroy');
        Route::get('/react', 'AdminController@reactAdmin');
        Route::resource('/categories', 'CategoryController');
        Route::resource('/products', 'ProductController');
});

// Route::group(
//     ['prefix'=>'/admin',
//     'namespace'=>'Store',
//     'middleware'=>['auth', 'admin']
//     ], function(){

//         Route::resource('/categories', 'CategoryController');
// });



Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');



Route::resource('/status', 'Admin\StatusController');
// Route::resource('/category', 'CategoryController');
Route::resource('/order', 'Admin\OrderController');
Route::resource('/users', 'UserController');
Route::resource('/orderlist', 'Admin\OrderListController');
