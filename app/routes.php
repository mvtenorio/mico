<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::group(array('before' => 'guest'), function()
{

	Route::get('login', 'LoginController@index');
	Route::post('login', 'LoginController@login');

	// Route::controller('password', 'RemindersController');

});

Route::group(array('before' => 'auth'), function()
{

	Route::get('logout', 'LoginController@logout');

	Route::get('/', array(
		'as' => 'home.index',
		'uses' => 'HomeController@index'
	));

	Route::resource('items', 'ItemsController', array('except' => array('create')));
	Route::resource('tags', 'TagsController', array('only' => array('index', 'store', 'destroy')));
});