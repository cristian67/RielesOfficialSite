<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGaleriasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('galerias', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->text('description');

			$table->integer('multimedias_id_3')->unsigned();
			$table->foreign('multimedias_id_3')
				->references('id')
				->on('multimedias');

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
		Schema::drop('galerias');
	}

}
