<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViewCountTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('viewcounts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('page');
			$table->integer('count');

			$table->timestamps();
		});

		DB::table('viewcounts')->insert(array(
				'page' => 'tbsd-01',
				'count' => 0
			)
		);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('viewcounts');
	}

}
