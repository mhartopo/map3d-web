<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('buildings', 'BuildingController@index');
Route::post('buildings', 'BuildingController@store');

Route::get('clusters', 'ClusterController@index');
Route::post('clusters', 'ClusterController@store');

Route::get('lands', 'LandController@index');
Route::post('lands', 'LandController@store');

Route::get('owners', 'OwnerController@index');
Route::post('owners', 'OwnerController@store');

Route::get('parks', 'ParkController@index');
Route::post('parks', 'ParkController@store');

Route::get('streets', 'StreetController@index');
Route::post('streets', 'StreetController@store');

Route::get('waters', 'WaterController@index');
Route::post('waters', 'WaterController@store');
