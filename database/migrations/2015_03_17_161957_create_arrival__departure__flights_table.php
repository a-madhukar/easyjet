<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArrivalDepartureFlightsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('arrival__departure__flights', function(Blueprint $table)
		{
			$table->increments('id');
                        
                        $table->integer('arrival_departure_id')->unsigned(); 
                        $table->foreign('arrival_departure_id')
                                ->references('id')
                                ->on('arrival__departures')
                                ->onDelete('cascade');
                        
                        $table->integer('flight_id')->unsigned();
                        $table->foreign('flight_id')
                                ->references('id')
                                ->on('flights')
                                ->onDelete('cascade');
                        
                        
                        $table->date('departure_date');
                         $table->date('arrival_date');
                        
                        $table->time('departure_time');
                         $table->time('arrival_time');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('arrival__departure__flights');
	}

}
