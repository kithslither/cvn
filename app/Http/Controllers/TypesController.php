<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Types;

use App\Http\Requests;

class TypesController extends Controller
{
    //
    //
    public function index(){
    	$this->viewData = [
    		'types' => Types::all()
    	];
    	return view('add.type')->with($this->viewData);
    }

    public function create(){
    	$this->viewData = [
    		'types' => Types::all()
    	];
    	return view('add.type')->with($this->viewData);
  	
    }

    public function store(Request $request){

    	$types = Types::create([
            'type_name' => $request->type_name,
            'type_description' => $request->type_description
        ]);

        return redirect('type');
    }

    public function destroy($id){
    	 $type = Types::find($id)->delete();
        return redirect('type');

    }

}
