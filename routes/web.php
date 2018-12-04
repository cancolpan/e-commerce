<?php


Route::get('/', 'HomeController@index')->name('home');

Route::get('/category/{slug}', 'CategoryController@index')->name('category');

Route::get('/product/{slug}', 'ProductController@index')->name('product');

Route::get('/cart','CartController@index')->name('cart');

Route::get('/order', 'OrderController@index')->name('order');

Route::get('/payment', 'PaymentController@index')->name('payment');

Route::get('/user', 'UserController@index')->name('user');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'],function (){

   // Route::resource('/product', 'ProductController');
   // Route::resource('/category', 'CategoryController');
   // Route::get('/order', 'OrderController@index');
    Route::resource('/users', 'AdminUsersController');
    Route::resource('/categories', 'AdminCategoriesController');
    Route::resource('/products', 'AdminProductsController');
    Route::post('/products/search', 'AdminProductsController@search');
   // Route::get('/', 'AdminController@index');


});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




