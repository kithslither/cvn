<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Backhoes;

class BackhoesController extends Controller
{
     //
    public function index(){
    	$this->viewData = [
    		'backhoes' => Backhoes::all()
    	];
    	return view('add.backhoe')->with($this->viewData);
    }

    public function create(){
    	$this->viewData = [
    		'backhoes' => Backhoes::all()
    	];
    	return view('add.backhoe')->with($this->viewData);
  	
    }

    public function store(Request $request){

    	$backhoe = Backhoes::create([
            'bh_code' => $request->bh_code,
        ]);

        return redirect('backhoe');
    }

    public function destroy($id){
    	 $backhoe = Backhoes::find($id)->delete();
        return redirect('backhoe');

    }

}
