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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//})

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {

    $api->get('/', function () {
        return view('api');
    });

    $api->get('/docs', function () {
        return view('vendor.l5-swagger.index');
    });
    $api->get('region','App\Http\Controllers\Api\RegionController@index');
    $api->get('region/{id}','App\Http\Controllers\Api\RegionController@single');

    $api->get('province','App\Http\Controllers\Api\ProvinceController@index');
    $api->get('province/{id}','App\Http\Controllers\Api\ProvinceController@single');

    $api->get('city','App\Http\Controllers\Api\CityController@index');
    $api->get('city/{id}','App\Http\Controllers\Api\CityController@single');

    $api->get('barangay','App\Http\Controllers\Api\BrgyController@index');
    $api->get('barangay/{id}','App\Http\Controllers\Api\BrgyController@single');
});
