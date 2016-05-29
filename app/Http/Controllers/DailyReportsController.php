<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Trips;
use Carbon;
use DB;
use App\Dumptrucks;


//use App\Equipments;

class DailyReportsController extends Controller
{
    //
    public function index(){
    	$now = Carbon\Carbon::now('Asia/Hong_Kong')->toDateString();
        //$subcons = Subcons::all();
       // $subconsget = $request->subcon_name;
        $today = Carbon\Carbon::today()->toDateString();
    	$trips = Trips::where('created_at', 'LIKE', '%'.$now.'%')->get();

        //dd("Right now is %s", Carbon\Carbon::now('Asia/Hong_Kong')->toDateTimeString());
        //$current = date("g:i: A", strtotime( $now));
        //dd($now);
        //dd($today);
        //$trips = Trips::where('date', '=', '2016-26-05');
     
        

      
    	$this->viewData = [
		
        'trips' => $trips,
       
        
    	];
    	return view('report.data')->with($this->viewData);
    }

    
		
}
