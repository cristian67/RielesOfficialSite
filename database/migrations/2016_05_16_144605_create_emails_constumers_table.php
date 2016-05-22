<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailsConstumersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('emails_constumers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('email')->unique();

			$table->integer('constumers_id_2')->unsigned();
			$table->foreign('constumers_id_2')
				->references('id')
				->on('constumers');

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
		Schema::drop('emails_constumers');
	}

}
