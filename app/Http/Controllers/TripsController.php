<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests;
use Carbon;
use App\Subcons;
use App\Dumptrucks;
use App\Backhoes;
use App\Trips;
use App\Types;

class TripsController extends Controller
{
    //
	public function index(){
		$now = Carbon\Carbon::now('Asia/Hong_Kong')->toDateString();
        $subcons = Subcons::all();
        $dumptrucks = Dumptrucks::all();
        $backhoes = Backhoes::all();
        $types = Types::all();

       

		$this->viewData = [
		'date' => $now,
        'subcons' => $subcons,
        'dumptrucks' => $dumptrucks,
        'backhoes' => $backhoes,
        'types' => $types
    	];
		return view('trip.trip')->with($this->viewData);
	}

	public function create(){

		$now = Carbon\Carbon::now('Asia/Hong_Kong')->toDateString();
        $subcons = Subcons::all();
        $dumptrucks = Dumptrucks::all();
        $backhoes = Backhoes::all();
        $types = Types::all();
      /*  dd($equipments);*/
        

		$this->viewData = [
		'date' => $now,
        'subcons' => $subcons,
        'dumptrucks' => $dumptrucks,
        'backhoes' => $backhoes,
        'types' => $types
    	];
		
		return view('trip.trip')->with($this->viewData);
		//return ($now);  
	}

	 public function store(Request $request){
        $now = Carbon\Carbon::now('Asia/Hong_Kong')->toDateString();
        $rate = $request->rate;
        $distance = $request->distance;
        $total = $rate * $distance;
      
       // dd((date("g:i:a", strtotime($request->time_dep))));
        /*$filler = 8;*/

        //dd($request->current_date);
		$trip = Trips::create([
            'subcon_id' => $request->subcon_name,
            'dt_id' => $request->dt_code,
            'bh_id' => $request->bh_code,
            'delivery_number' => $request->delivery_number,
            'load_id' => $request->subcon_name,
            'type_id' => $request->subcon_name,
            'total' => $total,
            'stockpile' => $request->stockpile,
            'source_area' => $request->source_area,
            'dump_area' => $request->dump_area,
            'shift' => $request->shift,
            'rate' => $request->rate,
            'distance'=> $request->distance,
            'date' => $request->current_date,
            'time_dep' => date("g:i:a", strtotime($request->time_dep)),
            'time_arr' => $request->time_arr,
            //'total' => $request->total


        ]);


        return redirect('trip');

	}


}
