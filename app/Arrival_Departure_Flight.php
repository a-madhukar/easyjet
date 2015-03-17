<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Arrival_Departure_Flight extends Model {

	//
    protected $fillable=[
        'arrival_departure_id',
        'flight_id',
        'departure_date',
        'arrival_date',
        'departure_time',
        'arrival_time'
        
        ];

}
