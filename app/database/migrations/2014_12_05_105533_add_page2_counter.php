<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPage2Counter extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('viewcounts')->insert(array(
				'page' => 'tbsd-02',
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
		DB::table('viewcounts')->where('page', 'tbsd-02')->delete();
	}

}
