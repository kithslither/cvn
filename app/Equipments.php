<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipments extends Model
{
	protected $fillable = [
		'equipment_id',
		'equipment_cat'
	];


    //an equipment is used in a trip
    public function trips(){

    	return $this->belongsTo('app\Trip');
    }
}
