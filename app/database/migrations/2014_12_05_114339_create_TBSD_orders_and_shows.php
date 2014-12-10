<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTBSDOrdersAndShows extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('TBSD_orders', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();

			$table->string('order_id');
			$table->integer('show_id');
			$table->integer('class');
			$table->integer('amount');
			$table->string('name');
			$table->string('mail');
			$table->string('phone');
			$table->integer('price');
			$table->string('status');
		});

		Schema::create('TBSD_shows', function(Blueprint $table)
		{	
			$table->integer('show_id');
			$table->integer('class');
			$table->integer('confirmed');
			$table->integer('capacity');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('TBSD_orders');
		Schema::drop('TBSD_shows');
	}

}
