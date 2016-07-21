<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('/hello', 'Hello@index');

Route::get('home', 'HomeController@index');

Route::get('/test/{name}',function(){return ('i love u');});

Route::get('/lifeline',function(){
	return view('p1');
});
Route::get('jss',function()
{
	return view('JSS');
});


Route::get('login', function()
{
   return View('new');
});
Route::post('login', 'AccountController@login');



Route::get('register',function()
{
	return view('register');
});
Route::post('register','RegisterController@register');






Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
