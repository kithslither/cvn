<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dumptrucks extends Model
{
	protected $fillable = [

		'dt_code'
	];


    //an equipment is used in a trip
    public function trips(){

    	return $this->hasMany('App\Trips');
    }
}
