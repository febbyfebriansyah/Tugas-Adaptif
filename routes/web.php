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

//Route::post('/logout', function(){
//	Auth::logout();
//	return redirect('/');
//});

// Auth::routes();
Route::get('/login', 'AuthenticationController@getLogin');
Route::post('/login', 'AuthenticationController@submitLogin');
Route::get('/register', 'AuthenticationController@getregister');
Route::post('/register', 'AuthenticationController@register');
Route::get('/logout', 'AuthenticationController@logout');

Route::group(['prefix' => 'admin' , 'middleware' => 'auth.admin'], function(){
	Route::get('/', 'HomeController@index');
	Route::post('/home/create','HomeController@create');
	Route::post('/home/edit', 'HomeController@edit');
	Route::get('/home/delete/{id}', 'HomeController@delete');
	Route::get('/home/coba', 'HomeController@download');
<<<<<<< HEAD
	Route::get('/home/upload/{id}', 'HomeController@upload');
<<<<<<< HEAD
});
=======
});
>>>>>>> 7d27c98e7c03d349487d5ff0976548ce9f351fcd
=======
	Route::post('/home/upload','HomeController@upload');
});

Route::group(['prefix' => 'user' , 'middleware' => 'auth.user'], function(){
	Route::get('/', 'UserController@index');
	Route::get('/profil','UserController@getProfil');
});

// Route::group(['middleware' => 'auth'], function(){
// 	Route::get('/home', 'HomeController@index');
// });
// Route::prefix('admin')->group(function(){
// 	Route::get('/','AdminController@index')->name('admin.dashboard');
// 	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
// 	Route::post('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login.submit');
// });
>>>>>>> d0e1c54fca64b2f9e7fa7f6ba67d78a996967edf
