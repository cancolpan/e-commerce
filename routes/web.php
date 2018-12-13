<?php


Route::get('/', 'HomeController@index')->name('home');

Route::get('/category/{slug}', 'CategoryController@index')->name('category');

Route::get('/product/{slug}', 'ProductsController@index')->name('product');


Route::group(['prefix'=>'cart'], function(){

    Route::get('/','CartController@index')->name('cart');
    Route::post('/add','CartController@add')->name('cart.add');
    Route::delete('/remove','CartController@remove')->name('cart.remove');
    Route::post('/update','CartController@update')->name('cart.update');
    Route::get('/clear', 'CartController@clear')->name('cart.clear');

});



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
    Route::resource('/boxes', 'AdminBoxesController');
    Route::resource('/box_groups', 'AdminBoxGroupsController');
    Route::post('/products/search', 'AdminProductsController@search');
    Route::post('/boxes/search', 'AdminBoxesController@search');
    Route::post('/box_groups/search', 'AdminBoxGroupsController@search');
   // Route::get('/', 'AdminController@index');


});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




