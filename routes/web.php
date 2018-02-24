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

// User Routes
Route::get('/', 'WelcomeController@index');
Route::get('/blog-details', 'WelcomeController@blogDetailsInfo')->name('post');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Admin Routes
Route::group(['namespace' => 'Admin'], function() {

	// Users Routes
    Route::resource('admin/user', 'UserController');

    // Post Routes
    Route::resource('admin/post', 'PostController');

	// Tag Routes
	Route::resource('admin/tag', 'TagController');

	// Category Routes
	Route::resource('admin/category', 'CategoryController');


});

