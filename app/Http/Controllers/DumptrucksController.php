<?php

namespace App\Http\Controllers;

use App\Dumptrucks;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CreateDumptruckRequest;
use Illuminate\Support\Facades\Auth;




class DumptrucksController extends Controller
{
    //
    public function index(){
    	$this->viewData = [
    		'dumptrucks' => Dumptrucks::all()
    	];
    	return view('add.dumptruck')->with($this->viewData);
    }

    public function create(){
    	$this->viewData = [
    		'dumptrucks' => Dumptrucks::all()
    	];
    	return view('add.dumptruck')->with($this->viewData);
  	
    }

    public function store(CreateDumptruckRequest $request){

    	$dumptruck = Dumptrucks::create([

            'dt_code' => $request->dt_code,
        ]);

        return redirect('dumptruck');
    }

    public function destroy($id){
    	 $dumptruck = Dumptrucks::find($id)->delete();
        return redirect('dumptruck');

    }

    
}
