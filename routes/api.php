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

//building
Route::get('buildings', 'BuildingController@index');
Route::get('buildings/{building}', 'BuildingController@show');
Route::get('buildings/name/{name}', 'BuildingController@getByName');
Route::get('buildings/address/{address}', 'BuildingController@getByAddress');


//cluster
Route::get('clusters', 'ClusterController@index');
Route::get('clusters/{cluster}', 'ClusterController@show');
Route::get('clusters/name/{name}', 'ClusterController@getByName');
Route::get('clusters/address/{address}', 'ClusterController@getByAddress');
Route::get('clusters/search/nearest', 'ClusterController@getNearest');
Route::get('clusters/{cluster}/{objname}', 'ClusterController@getByObject');

//land
Route::get('lands', 'LandController@index');
Route::get('lands/{land}', 'LandController@show');
Route::get('lands/address/{address}', 'LandController@getByAddress');


//owner
Route::get('owners', 'OwnerController@index');
Route::get('owners/find', 'OwnerController@search');
Route::get('owners/{owner}', 'OwnerController@show');

//park
Route::get('parks', 'ParkController@index');
Route::get('parks/{park}', 'ParkController@show');
Route::get('parks/name/{name}', 'ParkController@getByName');
Route::get('parks/address/{address}', 'ParkController@getByAddress');


//street
Route::get('streets', 'StreetController@index');
Route::get('streets/{street}', 'StreetController@show');
Route::get('streets/name/{name}', 'StreetController@getByName');


//water
Route::get('waters', 'WaterController@index');
Route::get('waters/{water}', 'WaterController@show');
Route::get('waters/name/{name}', 'WaterController@getByName');


//composite
Route::get('composite', 'CompositeController@getAll');
Route::get('composite/name/{name}', 'CompositeController@getByName');
Route::get('composite/address/{address}', 'CompositeController@getByAddress');
