<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

const API_VERSION = 'v1';

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/'.API_VERSION.'/orders', 'Api\ApiOrderController@index');
Route::get('/'.API_VERSION.'/orders/complete', 'Api\ApiOrderController@complete_orders');

Route::get('/'.API_VERSION.'/drivers', 'Api\ApiDriverController@index');
Route::get('/'.API_VERSION.'/driver/{driver_id}/orders', 'Api\ApiDriverController@driver_orders');
