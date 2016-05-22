<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypesGaleriasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('types_galerias', function(Blueprint $table)
		{
			$table->increments('id');
			$table->enum('type', ['imagen','video']);

			$table->integer('galerias_id')->unsigned();
			$table->foreign('galerias_id')
				->references('id')
				->on('galerias')
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
		Schema::drop('types_galerias');
	}

}
