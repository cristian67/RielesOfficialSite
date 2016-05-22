<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewslettersNoticesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('newsletters_notices', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('posts_id_3')->unsigned();
			$table->foreign('posts_id_3')->references('id')->on('posts');

			$table->integer('newsletters_id_2')->unsigned();
			$table->foreign('newsletters_id_2')->references('id')->on('newsletters');

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
		Schema::drop('newsletters_notices');
	}

}
