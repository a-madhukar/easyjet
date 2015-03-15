<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartureTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('departures', function(Blueprint $table)
		{
                        $table->increments('id');
			//$table->integer('arrival_id')->unsigned();
                        //$table->foreign('arrival_id')->references('id')->on('arrivals')->onDelete('cascade');
                        
                        $table->string('city');
                        $table->string('country'); 
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
		Schema::drop('departures');
	}

}
