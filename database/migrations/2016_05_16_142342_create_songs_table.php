<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSongsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('songs', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('title');
			$table->text('description');
			$table->string('url');
			$table->text('lyrics');
			$table->float('cash');

			$table->integer('albums_id')->unsigned();
			$table->foreign('albums_id')
				->references('id')
				->on('albums');

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
		Schema::drop('songs');
	}

}
