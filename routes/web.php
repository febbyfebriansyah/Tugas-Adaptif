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

Route::get('/', 'ListController@show');

Route::get('/logout', function(){
	Auth::logout();
	return redirect('/');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function(){
	Route::get('/home', 'HomeController@index');
	Route::post('/home/create','HomeController@create');
	Route::post('/home/edit', 'HomeController@edit');
	Route::get('/home/delete/{id}', 'HomeController@delete');
	Route::get('/home/coba', 'HomeController@download');
	Route::get('/home/upload/{id}', 'HomeController@upload');
<<<<<<< HEAD
});
=======
});
>>>>>>> 7d27c98e7c03d349487d5ff0976548ce9f351fcd
