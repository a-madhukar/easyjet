<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Arrival_Departure extends Model {

	//
    
    public function flights()
    {
        return $this->belongsToMany('App\Flight','arrival__departure__flights','arrival_departure_id')->withTimestamps(); 
    }

}
