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

//Route::get('/', 'WelcomeController@index');
Route::get('/', 'IndexController@index');
Route::get('/contacto', 'IndexController@contacto');
Route::get('/marcas', 'IndexController@marcas');
Route::get('/modelos/{id}', 'IndexController@modelos');
Route::get('/tutoriales/{id}', 'IndexController@tutoriales');
Route::get('/tutorial/{id}', 'IndexController@tutorial');
Route::get('/login', 'IndexController@login');