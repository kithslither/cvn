<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcons extends Model
{
    //
    protected $fillable = [

		'subcon_name'
	];

	public function trips(){

    	return $this->hasMany('App\Trips');
    }
}
