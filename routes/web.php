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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function(){
	
	/* Con resource el toma y crea las rutas en el controlador userControler */
	
	Route::Resource('users','UsersController');
	
	Route::get('users/{id}/destroy', [
			'uses' => 'UsersController@destroy',
			'as'   => 'admin.users.destroy'
		]);

	/* asi creo las rutas para la categoria y coloco el controlador para es'o */
	
	Route::resource('categories', 'CategoriesController');

	Route::get('categories/{id}/destroy', [
		'uses'	=>	'CategoriesController@destroy',
		'as'	=>	'admin.categories.destroy'
		]);

	Route::get('categories/{id}/edit', [
		'uses'	=>	'CategoriesController@edit',
		'as'	=>	'admin.categories.edit'
		]);
});
