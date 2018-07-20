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
    $api->get('region/{regCode}','App\Http\Controllers\Api\RegionController@single');
    $api->get('region/{regCode}/provinces','App\Http\Controllers\Api\RegionController@province');
    $api->get('region/{regCode}/cities','App\Http\Controllers\Api\RegionController@city');
    $api->get('region/{regCode}/barangays','App\Http\Controllers\Api\RegionController@brgy');

    $api->get('province','App\Http\Controllers\Api\ProvinceController@index');
    $api->get('province/{provCode}','App\Http\Controllers\Api\ProvinceController@single');
    $api->get('province/{provCode}/cities','App\Http\Controllers\Api\ProvinceController@city');
    $api->get('province/{provCode}/barangays','App\Http\Controllers\Api\ProvinceController@brgy');

    $api->get('city','App\Http\Controllers\Api\CityController@index');
    $api->get('city/{citymonCode}','App\Http\Controllers\Api\CityController@single');
    $api->get('city/{citymonCode}/barangays','App\Http\Controllers\Api\CityController@brgy');

    $api->get('barangay','App\Http\Controllers\Api\BrgyController@index');
    $api->get('barangay/{brgyCode}','App\Http\Controllers\Api\BrgyController@single');
});
