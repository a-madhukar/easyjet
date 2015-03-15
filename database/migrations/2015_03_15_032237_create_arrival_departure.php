<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArrivalDeparture extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('arrival_departure', function(Blueprint $table)
		{
			$table->increments('id');
                           $table->integer('arrival_id')->unsigned();
                        $table->foreign('arrival_id')->references('id')->on('arrival')->onDelete('cascade');
                     
                        
                        $table->integer('departure_id')->unsigned();
                        $table->foreign('departure_id')->references('id')->on('departures')->onDelete('cascade');
                        
                        
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
		Schema::drop('arrival_departure');
	}

}
