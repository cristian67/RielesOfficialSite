<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypesMultimediaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('types_multimedia', function(Blueprint $table)
		{
			$table->increments('id');
			$table->enum('type', ['imagen','video']);

			$table->integer('multimedias_id_2')->unsigned();
			$table->foreign('multimedias_id_2')
				->references('id')
				->on('multimedias')
				->onDelete('cascade');

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
		Schema::drop('types_multimedia');
	}

}
