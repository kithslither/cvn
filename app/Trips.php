<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trips extends Model
{
	protected $fillable = [
		'delivery_number', 
		'subcon_id',
		'dt_id',
		'bh_id',
		'load_id',
		'type_id',
		'stockpile',
		'source_area', 
		'dump_area',
		'shift', 
		'rate',
		'distance',
		'date',
		'time_dep',
		'time_arr',
		'total',
	];

    //a trip needs a dumptruck

	public function getPosterSubcon(){
    	return Subcons::where('id', $this->subcon_id)->first()->subcon_name;
    }

    public function getPosterDumptruck(){
    	return Dumptrucks::where('id', $this->dt_id)->first()->dt_code;
    }

    public function getPosterBackhoe(){
    	return Backhoes::where('id', $this->bh_id)->first()->bh_code;
    }


    /*public function getPosterSubcon(){
    	return Subcons::where('id', $this->subcon_id)->first()->subcon_name;
    }*/
    



  
}
