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
Route::resource('lands', 'admin\LandsController');