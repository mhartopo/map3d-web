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
Route::resource('clusters', 'admin\ClustersController');

//buildings
Route::resource('buildings', 'admin\BuildingsController');
