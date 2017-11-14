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

Route::get('/', 'admin\ClustersController@index');

//cluster
Route::get('clusters/search', 'admin\ClustersController@search');
Route::resource('clusters', 'admin\ClustersController');

//onwers
Route::get('owners/search', 'admin\OwnersController@search');
Route::resource('owners', 'admin\OwnersController');

//buildings
Route::get('buildings/search', 'admin\BuildingsController@search');
Route::resource('buildings', 'admin\BuildingsController');

//lands
Route::get('lands/search', 'admin\LandsController@search');
Route::resource('lands', 'admin\LandsController');

//parks
Route::get('parks/search', 'admin\ParksController@search');
Route::resource('parks', 'admin\ParksController');

//street
Route::get('streets/search', 'admin\StreetsController@search');
Route::resource('streets', 'admin\StreetsController');

//water
Route::get('waters/search', 'admin\WatersController@search');
Route::resource('waters', 'admin\WatersController');


Auth::routes();

//test
Route::get('test', 'admin\OwnersController@test');