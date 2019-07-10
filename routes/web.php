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
	/*
	Route::get('/', function () {
	    return view('welcome');
	});
	*/
	/*
	Route::get('/hello', function() {
		//return view('welcome');
		return 'hello world';
	});
	*/

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

//routes for the post controller
Route::resource('posts', 'PostsController');
Auth::routes();

Route::get('/profile', 'ProfileController@index')->name('profile');
