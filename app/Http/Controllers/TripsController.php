<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TripsController extends Controller
{
    //
	public function index(){

		return view('trip.dashboard');
	}

	public function dumptruck(){

		return view('trip.dumptruck');
	}


}
