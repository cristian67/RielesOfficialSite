<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConstumersNewslettersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('constumers_newsletters', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('constumers_id_3')->unsigned();
			$table->foreign('constumers_id_3')->references('id')->on('constumers');

			$table->integer('newsletters_id')->unsigned();
			$table->foreign('newsletters_id')->references('id')->on('newsletters');

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
		Schema::drop('constumers_newsletters');
	}

}
