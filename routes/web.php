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
Route::get('/test', function(){
	return view('test');
});

// Route::get('/', 'ListController@show');

//Route::post('/logout', function(){
//	Auth::logout();
//	return redirect('/');
//});

// Auth::routes();
Route::get('/', 'AuthenticationController@getLogin');
Route::get('/login', 'AuthenticationController@getLogin');
Route::post('/login', 'AuthenticationController@submitLogin');
Route::get('/register', 'AuthenticationController@getregister');
Route::post('/register', 'AuthenticationController@register');
Route::get('/logout', 'AuthenticationController@logout');
Route::get('/account_activation', 'AuthenticationController@getActivation');
Route::post('/account_activation', 'AuthenticationController@postActivation');
Route::get('/forget_password', 'AuthenticationController@getForgetPassword');
Route::get('/forget_password2', 'AuthenticationController@getForgetPassword2');
Route::post('/forget_password', 'AuthenticationController@postForgetPassword');
Route::post('/forget_password2', 'AuthenticationController@postForgetPassword2');
Route::get('/new_password', 'AuthenticationController@getNewPassword');
Route::post('/new_password', 'AuthenticationController@postNewPassword');

/*Route::group(['prefix' => 'admin' , 'middleware' => 'auth.admin'], function(){
	Route::get('/', 'HomeController@index');
	Route::post('/home/create','HomeController@create');
	Route::post('/home/edit', 'HomeController@edit');
	Route::get('/home/delete/{id}', 'HomeController@delete');
	Route::get('/home/coba', 'HomeController@download');
//HEAD
//	Route::get('/home/upload/{id}', 'HomeController@upload');
//HEAD
//});
//=======
//});
//>>>>>>> 7d27c98e7c03d349487d5ff0976548ce9f351fcd
//=======
	Route::post('/home/upload','HomeController@upload');
});*/

/*Route::group(['prefix' => 'user' , 'middleware' => 'auth.user'], function(){
	Route::get('/profil','UserController@showProfil');
});*/


 Route::group(['middleware' => 'auth'], function(){
 	//-------------------SETELAH GANTI FRONT-END----------------
 	Route::get('/home', 'HomeController@index');
 	Route::post('/home/create','HomeController@create');
	Route::post('/home/edit', 'HomeController@edit');
	Route::get('/home/detail/{id}', 'HomeController@detail');
	Route::get('/home/delete/{id}', 'HomeController@delete');
 	Route::get('/profil', 'HomeController@showProfil');
 	Route::post('/profil', 'HomeController@editProfil');
 	Route::get('/status', 'HomeController@status');
 	Route::get('/daftar-pengajuan', function(){
 		return view('admin.daftar_pengajuan');
 	});
 	
 	//-------------------SEBELUM GANTI FRONT-END----------------
 	// Route::get('/home', 'HomeController@index');
	// Route::post('/home/create','HomeController@create');
	// Route::post('/home/edit', 'HomeController@edit');
	// Route::get('/home/delete/{id}', 'HomeController@delete');
	// Route::get('/home/coba', 'HomeController@download');
	// Route::get('/home/upload/{id}', 'HomeController@upload');
	//----------------------------------------------------------
 });
//>>>>>>> d0e1c54fca64b2f9e7fa7f6ba67d78a996967edf