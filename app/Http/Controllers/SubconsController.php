<?php

namespace App\Http\Controllers;

use App\Subcons;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CreateSubconRequest;
use Illuminate\Support\Facades\Auth;

class SubconsController extends Controller
{
    //
    public function index(){
    	$this->viewData = [
    		'subcons' => Subcons::all()
    	];
    	return view('add.subCon')->with($this->viewData);
    }

    public function create(){
    	$this->viewData = [
    		'subcons' => Subcons::all()
    	];
    	return view('add.subCon')->with($this->viewData);
  	
    }

    public function store(CreateSubconRequest $request){

    	$subon = Subcons::create([
            'id' => $request->id,
            'subcon_name' => $request->subcon_name,
        ]);

        return redirect('subcon');
    }

    public function destroy($id){
    	 $subcon = Subcons::find($id)->delete();
        return redirect('subcon');

    }

     
}
