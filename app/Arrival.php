<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Arrival extends Model {

	//
    protected $fillable = ['city',
        'country'];
    
    /*public function departures()
    {
        return $this->belongsToMany('App\Departure');
    }
     */
    
    public function departures()
    {
        return $this->belongsToMany('App\Departure')->withTimestamps(); 
    }

}
