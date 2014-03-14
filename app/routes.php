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

// DESLOGADO
Route::group(array('before' => 'guest'), function()
{

	Route::get('login', 'LoginController@index');
	Route::post('login', 'LoginController@login');

	// Route::controller('password', 'RemindersController');

});

// LOGADO
Route::group(array('before' => 'auth'), function()
{

	Route::get('logout', 'LoginController@logout');

	Route::get('/', array(
		'as' => 'home.index',
		'uses' => 'HomeController@index'
	));

	Route::group(array('before' => 'access'), function()
	{
		Route::resource('items', 'ItemsController');
		Route::resource('tags', 'TagsController');
	});

	// Route::get('anexo/{pasta}/{file}', array(
	// 	'as' => 'files.show',
	// 	'uses' => 'FilesController@getFile',
	// 	'after' => 'file'
	// ));

	Route::group(array('before' => 'ajax'), function()
	{
		// ajax

		// autocomplete
		//exemplo ---> Route::get('load-usuarios-autocomplete', 'UsuariosController@getAutoComplete');
	});

});