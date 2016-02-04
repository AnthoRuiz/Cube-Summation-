<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::group(['middleware' => ['web']], function () {


    Route::get('/', [
    'uses' => 'HomeController@index',
    'as'   => 'index'
	]);

	Route::get('archivo', [
	    'uses' => 'HomeController@file',
	    'as'   => 'archivo'
	]);

	Route::get('ejecutar', [
	    'uses' => 'HomeController@execute',
	    'as'   => 'execute'
	]);

	Route::get('teclado', [
	    'uses' => 'HomeController@keyboard',
	    'as'   => 'teclado'
	]);


	Route::post('archivo', [
	    'uses' => 'HomeController@upload',
	    'as'   => 'archivo_post'
	]);

	Route::post('keyboard_post', [
	    'uses' => 'HomeController@uploadKeyboard',
	    'as'   => 'keyboard_post'
	]);
});