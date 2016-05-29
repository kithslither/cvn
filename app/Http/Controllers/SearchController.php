<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Trips;
use Carbon;
use DB;
use App\Dumptrucks;
use App\Subcons;

class SearchController extends Controller
{
    //
   public function index(Request $request){
        $subcons = Subcons::all();
        $subconsget = $request->subcon_name;
        $datefrom = $request->datefrom;
        $dateto = $request->dateto;
 
        $queries = Trips::where('subcon_id', 'LIKE', "%$subconsget%")
                        ->whereBetween('date', [$datefrom, $dateto])->get();


        $this->viewData = [
        
        'queries' => $queries,
        'subcons' => $subcons
        
        ];
        return view('report.monthly_report')->with($this->viewData);
    }

    public function show(){
    	$now = Carbon\Carbon::now();
        $month = Carbon\CarbonInterval::month();
    	$trips = Trips::all();
    	$subcons = Subcons::all();
        //$trips = DB::table('trips')->where('date', '=', $month)->get();

    

    	$this->viewData = [
		
        'trips' => $trips,
        'date' => $now,
        'subcons' => $subcons
        
    	];
    	return view('report.monthly_report')->with($this->viewData);
    }



   /* public function store(Request $request){
    	//where('subcon_id', 'LIKE', "%$subcon%")
    	$subcon = $request->subcon_name;
       	$datefrom = $request->datefrom;
    	$dateto = $request->dateto;
        //$a = Subcons::all()->where('id', '=', '1');
        $query = Trips::where('subcon_id', 'LIKE', "%$subcon%")
                        ->whereBetween('date', [$datefrom, $dateto])->get();

    	//dd($trips);
        $this->viewData = [
        
        'query' => $query,
        'subcon' => $subcon,
        'datefrom' => $datefrom,
        'dateto' => $dateto
        
        ];
        return redirect('queries')->with($this->viewData);
    }
*/

}
