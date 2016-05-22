<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('stores', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('songs_id')->unsigned();
			$table->foreign('songs_id')->references('id')->on('songs');

			$table->integer('albums_id_2')->unsigned();
			$table->foreign('albums_id_2')->references('id')->on('albums');

			$table->integer('constumers_id')->unsigned();
			$table->foreign('constumers_id')->references('id')->on('constumers');

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
		Schema::drop('stores');
	}

}
