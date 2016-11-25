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
Route::get('blog', [
	'uses' => 'PostController@index',
	'as' => 'blog',
	]);
Route::post('create',[
	'uses' => 'PostController@create',
	'as'=> 'create'
	]);
Route::get('view',[
	'uses' => 'PostController@view',
	'as' => 'view',
	]);
Route::get('getupdate/{id}',[
	'uses' => 'PostController@getUpdate',
	'as' => 'getupdate', 
	]);
Route::post('setupdate/{id}',[
	'uses' => 'PostController@setUpdate',
	'as' => 'setupdate',
	]);
