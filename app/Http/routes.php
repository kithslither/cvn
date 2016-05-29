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


/*Route::get('q', function(){

	$trips = App\Trips::all();
	foreach($trips as $trip){
	
		echo $trip->dt_id.' '. $trip->getPosterDumptruck().'</br>';
		
	}
		

});*/





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
    Route::auth();
    Route::get('/home', 'HomeController@index');
    
    Route::get('/', function () {
   /* return view('welcome');*/
    return view('auth.login2');
});
Route::get('login2', function (){
	return view('auth.login2');
});

Route::get('register2', function (){
	return view('auth.register2');
});

Route::resource('trip', 'TripsController');
/*Route::get('dumptruck/create', 'TripsController@create');*/
Route::resource('dumptruck', 'DumptrucksController');
Route::resource('backhoe', 'BackhoesController');
//Route::post('equipment', 'EquipmentsController@store');
//////Route::get('subcon/create', 'SubconsController@create');
Route::resource('subcon', 'SubconsController');
//Reports
Route::get('daily', 'DailyReportsController@index');
//Route::resource('monthly', 'MonthlyReportsController');
Route::resource('type', 'TypesController');

Route::get('monthly', 'SearchController@index');

});


