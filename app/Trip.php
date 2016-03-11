<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    //a trip needs an equipment
    public function equipments(){

    	return $this->haMany('app\Equipments');
    }
}
