<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('trip', 'TripsController');
Route::get('/dumptruck', 'TripsController@dumptruck');
Route::get('equipment/create', 'EquipmentsController@create');
Route::resource('equipment', 'EquipmentsController');
//Route::post('equipment', 'EquipmentsController@store');
Route::get('subcon/create', 'SubconsController@create');
Route::resource('subcon', 'SubconsController');






/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
