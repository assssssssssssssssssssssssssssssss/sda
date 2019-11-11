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

Route::group(array('middleware' => 'auth'), function(){

	Route::get('/profile', array('as'=>'profile', function(){
		return view('profile');
	}));

	Route::get('/logout', array('as'=>'logout', 'uses'=>'UserController@logout'));
	
});

Route::get('/', array('as'=>'home', 'uses'=>'UserController@home'));

Route::get('/login', array('as'=>'login', 'uses'=>'UserController@getLogin'));

Route::post('/login', array('as'=>'login-post', 'uses'=>'UserController@postLogin'));

Route::get('/register', array('as'=>'register', 'uses'=>'UserController@getRegister'));

Route::post('/register', array('as'=>'register-post', 'uses'=>'UserController@postRegister'));


