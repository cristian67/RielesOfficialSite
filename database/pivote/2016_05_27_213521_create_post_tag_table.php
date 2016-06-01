<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTagTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('post_tag', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('posts_2_id')->unsigned();
			$table->foreign('posts_2_id')->references('id')->on('posts');

			$table->integer('tags_2_id')->unsigned();
			$table->foreign('tags_2_id')->references('id')->on('tags');

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
		Schema::drop('post_tag');
	}

}
