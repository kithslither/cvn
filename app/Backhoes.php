<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Backhoes extends Model
{
    //
    protected $fillable = [

		'bh_code'
	];

	public function trips(){

    	return $this->hasMany('App\Trips');
    }
}
