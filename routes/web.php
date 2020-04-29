<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Order
Route::get('/order/create', 'OrderController@create');
Route::post('/order/store', 'OrderController@store');

Route::post('/status/update/{order}', "OrderController@update_status");
Route::get('/order', 'OrderController@index')->name('order.index');

Route::get('/tracker', "TrackerController@index")->name('tacker.index');
Route::get('/tracker/order/{order}', "TrackerController@index_order")->name('tracker.order');

Route::get('/driver/create', 'DriverController@create')->name('driver.create');
Route::post('/driver/store', 'DriverController@store')->name('driver.store');
Route::post('/driver/update/{order}', 'DriverController@assign_driver');
//TODO: return in /v1/api/driver/order/{driver_id}
Route::get('/driver/orders/{driver_id}', 'DriverController@driver_orders');
Route::get('/driver', "DriverController@index")->name('driver.index');

//TODO: Create a menu controller
Route::get('/menu/create', 'MenuController@create')->name('menu.create');

Route::post('/venue/store', 'VenueController@store')->name('venue.store');
Route::get('/venue/create', 'VenueController@create')->name('venue.create');
Route::get('/venue', 'VenueController@index')->name('venue.index');
