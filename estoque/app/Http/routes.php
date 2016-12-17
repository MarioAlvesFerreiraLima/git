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

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/products', 'ProductController@index');  

Route::get('/products/create', 'ProductController@create');  

Route::post('/products/insert', 'ProductController@insert');  

Route::get('/products/delete/{id}', 'ProductController@delete');  

Route::get('/products/edit/{id}', 'ProductController@edit'); 

Route::post('/products/update/{id}', 'ProductController@update'); 

Route::post('/products/search', 'ProductController@search');  

//

Route::get('/lots', 'LotController@index'); 

Route::get('/lots/create', 'LotController@create');  

Route::post('/lots/insert', 'LotController@insert'); 

Route::get('/lots/delete/{id}', 'LotController@delete');  

Route::get('/lots/edit/{id}', 'LotController@edit');

Route::post('/lots/update/{id}', 'LotController@update'); 

Route::get('/lots/expired', 'LotController@expired');  

Route::get('/lots/stock', 'LotController@stock'); 