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

Route::get('/', 'WelcomeController@index');
Route::get('/blog-details', 'WelcomeController@blogDetailsInfo')->name('post');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/category/add-category', 'CategoryController@showCategoryForm');

Route::get('admin/post', function() {
    return view('admin.post.post');
});

Route::get('admin/tag', function() {
    return view('admin.tag.tag');
});

Route::get('admin/category', function() {
    return view('admin.category.category');
});