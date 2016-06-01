<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGaleriaMultimediaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('galeria_multimedia', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('multimedias_2_id')->unsigned();
			$table->foreign('multimedias_2_id')->references('id')->on('multimedias');

			$table->integer('galerias_2_id')->unsigned();
			$table->foreign('galerias_2_id')->references('id')->on('galerias');

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
		Schema::drop('galeria_multimedia');
	}

}
