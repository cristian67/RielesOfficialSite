<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMultimediasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('multimedias', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('description');
			$table->string('url');
			$table->enum('type', ['imagen','video']);

			$table->integer('galerias_id')->unsigned();
			$table->foreign('galerias_id')
				->references('id')
				->on('galerias');

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
		Schema::drop('multimedias');
	}

}
