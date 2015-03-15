<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Departure;
use App\Arrival;
use App\Http\Controllers\Controller;

use Request;
use DB;

class HomeController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
           
            $departures= Departure::lists('city','id'); 
            $arrivals = Arrival::lists('city','id');
            //return $sample; 
            return view('pages.index',compact('departures','arrivals')); 
	}
        
        public function choose()
        {
            return view('pages.chooseflight'); 
        }
        
        public function search()
        {
            $input = Request::all(); 
            
            //dd($input['departure']);
            
           // $pivot = DB::table('arrival_departure')->where('arrival_id','=',$input['arrival'])->where('departure_id','=',$input['departure'])->get();
           
            $query=DB::table('arrival_departure')
                    ->join('arrivals','arrival_departure.arrival_id','=','arrivals.id')
                    ->join('departures','arrival_departure.departure_id','=','departures.id')
                    ->select('departures.city as departure_city','departures.country as departure_country', 'arrivals.city as arrival_city','arrivals.country as arrival_country')
                    ->where('departures.id','=',$input['departure'])
                    ->where('arrivals.id','=',$input['arrival'])
                    ->get();
            
            //return $query; 
            
            return view('pages.chooseflight',compact('query')); 
        }
        
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
