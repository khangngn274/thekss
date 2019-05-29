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
Route::get('/coming-soon', 'FrontendController@comingsoon');


Route::prefix('/')->group(function() {
    Route::get('', 'FrontendController@index');
    
});


Route::prefix('/')->group(function() {
    Route::get('ucd-tech', 'TechController@index');
    
});

Route::prefix('/')->group(function() {
    Route::get('ucd-project', 'ProjectController@getucdproject');
    
});

Route::prefix('/')->group(function() {
    Route::get('blog', 'BlogController@index');
    
});

Route::prefix('/')->group(function() {
    Route::get('single-blog', 'BlogController@indexsingle');
    
});

Route::prefix('/')->group(function() {
	Route::get('ucd-product', 'ProductController@index');

    Route::get('ucd-product/{id}', 'ProductController@index');
    // Route::post('ucd-product/{id}', 'ProductController@postIndex');
    Route::get('product-detail/{id}', 'ProductController@productDetails');

    
});





