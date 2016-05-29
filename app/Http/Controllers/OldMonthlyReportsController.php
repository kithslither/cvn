<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Trips;
use Carbon;
use DB;
use App\Dumptrucks;

class MonthlyReportsController extends Controller
{
    //
    public function index(){
    	$now = Carbon\Carbon::now();
        $month = Carbon\CarbonInterval::month();
    	$trips = Trips::all();
        //$trips = DB::table('trips')->where('date', '=', $month)->get();

        //dd($trips);

    	$this->viewData = [
		
        'trips' => $trips,
        'date' => $now
        
    	];
    	return view('report.data')->with($this->viewData);
    }
}
