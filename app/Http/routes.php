<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requeste*/

/* RUTA MOSTRAR CON RSOURCE*/

Route::group(['prefix' => 'admin', 'namespace'=>'Admin'], function(){

	Route::resource('users','UsersController');
});

Route::group(['prefix' => 'home', 'namespace'=>'Home'], function(){

	Route::resource('posts','PostsController');
	Route::resource('songs','SongsController');
	Route::resource('albums','AlbumsController');
	Route::resource('multimedias','MultimediasController');
	Route::resource('galerias','GaleriasController');
});




Route::group(['prefix' => 'article', 'namespace'=>'Article'], function(){

	Route::resource('posts','ArticleController');
});

Route::group(['prefix' => 'galeria', 'namespace'=>'Galeria'], function(){

	Route::resource('multimedias','MultimediaController');
});



/*Puebas Controller */
Route::controllers([
		'users' => 'UsersController',
		'auth' => 'Auth\AuthController',
		'password' => 'Auth\PasswordController',
	]);


/*biografia modelo ^^*/
Route::get('/biografia', [
	'uses'=> 'WelcomeController@biografia',
	'as' => 'biografia'
]);
/*audio reproducir*/
Route::get('/audio', [
	'uses'=> 'WelcomeController@audio',
	'as' => 'audio'
]);
/*contacto modelo ^^*/
Route::get('/contacto', [
	'uses'=> 'WelcomeController@contacto',
	'as' => 'contacto'
]);

/*Index Route funcionando ^^*/
Route::get('/', [
	'uses'=> 'WelcomeController@index',
	'as' => 'home'
	]);

/* Ruta del articulo con slugable Funcionando ^^ */
Route::get('/articulos/{slug}',[
	'as'   => 'article',
	'uses' => 'WelcomeController@article'
]);

// Los tag vista funciona
Route::get('/tag/{tag}', [
	'as'   => 'tagged',
	'uses' => 'WelcomeController@tags'
]);


//Ver galleria funcionando
Route::get('/galerias',[
    'as'   => 'galerias',
    'uses' => 'GalleriaController@galerias'
]);

/* Ver galeria imgenes */
Route::get('/galeria/imagenes/{id}',[
	'as'   => 'gallery',
	'uses' => 'GalleriaController@ver'
]);

/* Ver galeria video */
Route::get('/galeria/videos/{id}',[
    'as'   => 'gallery',
    'uses' => 'GalleriaController@video'
]);

//Ver Discografia
Route::get('/discografia',[
	'as'   => 'discografia',
	'uses' => 'DiscoController@disco'
]);

Route::get('/discografia/music/{id}',[
	'as'   => 'music',
	'uses' => 'DiscoController@ver'
]);


Route::resource('mail','MailController');

/*probar subir archivo laravel 4 con bdd*/
Route::controller('music','MusicController');

/*laravel 5*/
Route::group(['prefix'=>'couch','namespace'=>'Couch'],function(){
	Route::resource('files','FileController');
});

Route::get('/logout', [
	'uses' => 'AdminController@logout',
	'as' => 'logout'

]);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

