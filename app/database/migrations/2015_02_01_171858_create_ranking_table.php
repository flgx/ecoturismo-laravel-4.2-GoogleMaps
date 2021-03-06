<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRankingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ranking', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->integer('location_id')->unsigned();
			$table->string('ranking', 50);

			$table->integer('user_created_id')->unsigned();
			$table->integer('user_updated_id')->unsigned()->nullable();
			
			$table->dateTime('created_at');
			$table->dateTime('updated_at')->nullable();	
			$table->dateTime('deleted_at')->nullable();

			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('location_id')->references('id')->on('locations');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ranking');
	}

}
