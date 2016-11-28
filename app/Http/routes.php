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
	'middleware' => 'auth'
	]);
//route for post
Route::post('create',[
	'uses' => 'PostController@create',
	'as'=> 'create',
	'middleware'=> 'auth'
	]);
//route for view
Route::get('view',[
	'uses' => 'PostController@view',
	'as' => 'view',
	'middleware'=> 'web'

	]);
//route for update
Route::get('getupdate/{id}',[
	'uses' => 'PostController@getUpdate',
	'as' => 'getupdate', 
	'middleware'=>'auth'
	]);
Route::post('setupdate/{id}',[
	'uses' => 'PostController@setUpdate',
	'as' => 'setupdate',
	'middleware'=>'auth'
	]);
//route for delete
Route::get('delete/{id}',[
	'uses' => 'PostController@delete',
	'as' => 'delete',
	'middleware'=>'auth'
	]);
Route::auth();

Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index');
