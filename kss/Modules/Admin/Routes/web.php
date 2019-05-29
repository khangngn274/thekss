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



Route::get('/admin/login',['uses' => 'AccountController@getLogin'])->name('login');

Route::post('/admin/login', [ 'uses' => 'AccountController@postLogin'])->name('admin.login');
// Route::get('/logout', 'AdminController@logout');
Route::get('/logout', 'AccountController@logout')->name('admin.logout');

Route::get('/register',['uses' => 'RegisterController@getRegister']);
Route::post('/register',['uses' => 'RegisterController@create'])->name('register');


Route::group(['middleware' => 'admin','prefix' => 'admin'], function(){

    Route::get('/index', 'AccountController@index')->name('admin.index');
	Route::get('/settings', 'AccountController@settings');
	Route::get('/checkpwd', 'AccountController@checkPassword');
	Route::match(['get', 'post'], '/updatepwd', 'AccountController@updatePassword');
	Route::get('/register', 'AccountController@register');
	Route::post('/register', 'AccountController@register');   

    Route::group(['prefix' => 'category'], function(){
    	Route::match(['get', 'post'], '/addcategory', 'CategoryController@addCategory');
		Route::match(['get', 'post'], '/updatecategory/{id}','CategoryController@updateCategory');
		Route::match(['get', 'post'], '/deletecategory/{id}','CategoryController@deleteCategory');
		Route::get('/viewcategory', 'CategoryController@viewCategory');
        // category
    });

    

    Route::group(['prefix' => 'project'], function(){
    	Route::match(['get', 'post'], '/addproject', 'ProjectController@addProject');

		Route::get('/viewproject', 'ProjectController@viewProject');

		Route::match(['get', 'post'], '/updateproject/{id}', 'ProjectController@updateProject');

		Route::match(['get', 'post'], '/deleteproject/{id}','ProjectController@deleteProject');

		Route::get('/delete-project-image/{id}','ProjectController@deleteProjectImage' );
        // category
    });

    Route::group(['prefix' => 'newscategory'], function(){
    	Route::match(['get', 'post'], '/addnewscategory', 'NewsCategoryController@addNewsCategory');
		Route::match(['get', 'post'], '/updatenewscategory/{id}','NewsCategoryController@updateNewsCategory');
		Route::match(['get', 'post'], '/deletenewscategory/{id}','NewsCategoryController@deleteNewsCategory');
		Route::get('/viewnewscategory', 'NewsCategoryController@viewNewsCategory');
    });


    Route::group(['prefix' => 'news'], function(){
    	Route::match(['get', 'post'], '/addnews', 'NewsController@addNews');

		Route::get('/viewnews', 'NewsController@viewNews');

		Route::match(['get', 'post'], '/updatenews/{id}', 'NewsController@updateNews');

		Route::get('/deletenews/{id}', 'NewsController@deleteNews');

		Route::get('/delete-news-image/{id}','NewsController@deleteNewsImage' );
        // category
    });

     Route::group(['prefix' => 'product'], function(){

    	Route::match(['get', 'post'], '/addproduct', 'ProductController@addProduct');

		Route::get('/viewproduct', 'ProductController@viewProduct');

		Route::match(['get', 'post'], '/updateproduct/{id}', 'ProductController@updateProduct');

		Route::match(['get', 'post'], '/deleteproduct/{id}','ProductController@deleteProduct');

		Route::get('/delete-product-image/{id}','ProductController@deleteProductImage' );
		Route::get('/update-product-status/{id}','ProductController@updateStatus' );

    });


   
});

