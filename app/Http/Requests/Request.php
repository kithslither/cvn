<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

abstract class Request extends FormRequest
{
    //

  public function messages()
  {
  	return [
  		'dt_code.required' => 'A Dump Truck code is required',
  		'dt_code.min' => 'Dump Truck code needs at least 4 characters',

  		'subcon_name.required' => 'A Sub Contractor name is required',
  		'subcon_name.min' => 'A Sub Contractor name needs at least 5 characters',
  	];	
  }
}
