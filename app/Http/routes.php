<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requeste*/

/*Home Route*/
Route::get('/',
	[
	'uses'=> 'WelcomeController@index',
	'as' => 'home'
	]);

/*video Route*/
Route::get('/videos', [
		'as' 	=> 'videos',
		'uses'  => 'WelcomeController@videos'
	]
);

/* Admin Controller Route*/
Route::get('articulos/{slug}',[
	'as'   => 'article',
	'uses' => 'WelcomeController@article'

]);

Route::get('/tag/{tag}', [

	'as'   => 'tagged',
	'uses' => 'WelcomeController@tags'

	]);

Route::get('/admin',[

	'as'   		 => 'adminsite',
	'uses' 		 => 'AdminController@desktop'
	]);

Route::get('/desktop', 'AdminController@desktop');



/*Video escritorio*/

Route::get('/admin/videos',[

	'as'   		 => 'videosite',
	'uses' 		 => 'AdminController@desktopVideo'
]);

Route::get('/desktop/video', 'AdminController@desktopVideo');




Route::get('/logout', [
	'uses' => 'AdminController@logout',
	'as' => 'logout'

]);

/*Edit*/

Route::get('admin/posts/{id}/edit', 'AdminController@edit');



/*Refresh*/
Route::post('admin/posts/{id}/refresh', 'AdminController@refresh');

/*Crear*/
Route::get('admin/posts/new',	[
		'as' 	=> 'nuevo',
		'uses'  => 'AdminController@nuevo'

]);

Route::post('admin/posts/new', 'AdminController@crear');

/* Borrar */
Route::get('admin/posts/{id}/delete','AdminController@delete');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
