<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model {

	//
    protected $fillable=[
        'flight_name',
        'capacity'
    ];
    
    public function arrival_departures()
    {
        return $this->belongsToMany('App\Arrival_Departure','arrival__departure__flights','arrival_departure_id')->withTimestamps(); 
    }

}
