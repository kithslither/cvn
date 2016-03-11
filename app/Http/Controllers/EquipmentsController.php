<?php

namespace App\Http\Controllers;

use App\Equipments;

use Illuminate\Http\Request;

use App\Http\Requests;




class EquipmentsController extends Controller
{
    //
    public function index(){
    	$this->viewData = [
    		'equipments' => Equipments::all()
    	];
    	return view('add.equipment')->with($this->viewData);
    }

    public function create(){
    	$this->viewData = [
    		'equipments' => Equipments::all()
    	];
    	return view('add.equipment')->with($this->viewData);
  	
    }

    public function store(Request $request){

    	$equipment = Equipments::create([
            'equipment_id' => $request->equipment_id,
            'equipment_cat' => $request->equipment_cat,
        ]);

        return redirect('equipment');
    }

    
}
