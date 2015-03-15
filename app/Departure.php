<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Departure extends Model {

	//

    protected $fillable = ['city',
        'country'];
    
   /* public function arrivals()
    {
        return $this->belongsTo('App\Arrival'); 
    }
    * */
    
    public function arrivals()
    {
        return $this->belongsToMany('App\Arrival')->withTimestamps();
    }
}
