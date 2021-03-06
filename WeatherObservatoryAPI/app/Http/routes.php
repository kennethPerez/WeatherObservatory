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
Route::get('/api/v1/people', 'People@index');
Route::get('/api/v1/services', 'Services@index');
Route::get('/api/v1/stations', 'Stations@index');
Route::post('/api/v1/myStations', 'Stations@myStations');
Route::post('/api/v1/stations', 'Stations@store');
Route::get('/api/v1/stations/variables', 'Stations@stationVariables');

Route::delete('/api/v1/stations/{id}', 'Stations@destroy');
Route::post('/api/v1/stations/update', 'Stations@update');

Route::post('/api/v1/people/login', 'People@login');
Route::post('/api/v1/people/register', 'People@store');
Route::post('/api/v1/people/change_pass', 'People@changePass');
Route::delete('/api/v1/people/{id}', 'People@destroy');

Route::post('/api/v1/astronomic', 'Astronomics@store');
Route::post('/api/v1/astronomic/update', 'Astronomics@update');
Route::delete('/api/v1/astronomic/{id}', 'Astronomics@destroy');
Route::post('/api/v1/climate', 'Climates@store');
Route::get('/api/v1/storeClimate/{temp}/{humidity}', 'Climates@storeArduinoData');
Route::post('/api/v1/climate/update', 'Climates@update');
Route::delete('/api/v1/climate/{id}', 'Climates@destroy');

Route::get('/api/v1/climate/climograms', 'Climates@climograms');