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
Route::get('buildings/{building}', 'BuildingController@show');
Route::get('buildings/name/{name}', 'BuildingController@getByName');
Route::get('buildings/address/{address}', 'BuildingController@getByAddress');


Route::get('clusters', 'ClusterController@index');
Route::post('clusters', 'ClusterController@store');
Route::get('clusters/{cluster}', 'ClusterController@show');
Route::get('clusters/name/{name}', 'ClusterController@getByName');
Route::get('clusters/address/{address}', 'ClusterController@getByAddress');

Route::get('lands', 'LandController@index');
Route::post('lands', 'LandController@store');
Route::get('lands/{land}', 'LandController@show');
Route::get('lands/address/{address}', 'LandController@getByAddress');


Route::get('owners', 'OwnerController@index');
Route::post('owners', 'OwnerController@store');
Route::get('owners/{owner}', 'OwnerController@show');

Route::get('parks', 'ParkController@index');
Route::post('parks', 'ParkController@store');
Route::get('parks/{park}', 'ParkController@show');
Route::get('parks/name/{name}', 'ParkController@getByName');
Route::get('parks/address/{address}', 'ParkController@getByAddress');

Route::get('streets', 'StreetController@index');
Route::post('streets', 'StreetController@store');
Route::get('streets/{street}', 'StreetController@show');
Route::get('streets/name/{name}', 'StreetController@getByName');

Route::get('waters', 'WaterController@index');
Route::post('waters', 'WaterController@store');
Route::get('waters/{water}', 'WaterController@show');
Route::get('waters/name/{name}', 'WaterController@getByName');

//composite
Route::get('composite', 'CompositeController@getAll');
Route::get('composite/name/{name}', 'CompositeController@getByName');
Route::get('composite/address/{address}', 'CompositeController@getByAddress');
