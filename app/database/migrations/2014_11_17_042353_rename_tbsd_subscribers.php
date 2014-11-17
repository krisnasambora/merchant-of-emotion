<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameTbsdSubscribers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('subscribers');
		Schema::rename('tbsd-subscribers', 'subscribers');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('subscribers');
		Schema::create('subscribers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('mail');

			$table->timestamps();
		});
		Schema::create('tbsd-subscribers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('mail');

			$table->timestamps();
		});
	}

}
