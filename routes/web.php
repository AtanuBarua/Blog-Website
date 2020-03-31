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

/*Route::get('/', function () {
    return view('welcome');
});*/

//Blog Client
Route::get('/', 'BlogController@index')->name('/');

Route::get('/category-blog/{id}/{name}','BlogController@categoryBlog')->name('category-blog');

Route::get('/blog-details/{id}','BlogController@blogDetails')->name('blog-details');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/sign-up', 'SignUpController@index')->name('sign-up');

//Category Admin
Route::get('/category/add-category', 'CategoryController@addCategory')->name('add-category');

Route::post('/category/new-category', 'CategoryController@newCategory')->name('new-category');

Route::get('/category/manage-category','CategoryController@manageCategory')->name('manage-category');

Route::get('/category/edit-category/{id}','CategoryController@editCategory')->name('edit-category');

Route::post('/category/update-category', 'CategoryController@updateCategory')->name('update-category');

Route::post('/category/delete-category}','CategoryController@deleteCategory')->name('delete-category');

//Blog Admin
Route::get('/blog/add-blog', 'BlogInfoController@addBlog')->name('add-blog');

Route::post('/blog/new-blog', 'BlogInfoController@newBlog')->name('new-blog');

Route::get('/blog/manage-blog', 'BlogInfoController@manageBlog')->name('manage-blog');

Route::get('/category/edit-blog/{id}','BlogInfoController@editBlog')->name('edit-blog');

Route::post('/category/update-blog','BlogInfoController@updateBlog')->name('update-blog');

Route::post('/blog/delete-blog','BlogInfoController@deleteBlog')->name('delete-blog');

//Category Blog
