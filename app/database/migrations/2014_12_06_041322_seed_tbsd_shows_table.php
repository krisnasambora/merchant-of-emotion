<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedTbsdShowsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('TBSD_shows')->insert(array(
		    array('show_id' => 1, 'class' => 1, 'confirmed' => 0, 'capacity' => 300),
		    array('show_id' => 1, 'class' => 2, 'confirmed' => 0, 'capacity' => 200),
		    array('show_id' => 2, 'class' => 1, 'confirmed' => 0, 'capacity' => 300),
		    array('show_id' => 2, 'class' => 2, 'confirmed' => 0, 'capacity' => 200),
		    array('show_id' => 3, 'class' => 1, 'confirmed' => 0, 'capacity' => 300),
		    array('show_id' => 3, 'class' => 2, 'confirmed' => 0, 'capacity' => 200),
		    array('show_id' => 4, 'class' => 1, 'confirmed' => 0, 'capacity' => 300),
		    array('show_id' => 4, 'class' => 2, 'confirmed' => 0, 'capacity' => 200),
		    array('show_id' => 5, 'class' => 1, 'confirmed' => 0, 'capacity' => 300),
		    array('show_id' => 5, 'class' => 2, 'confirmed' => 0, 'capacity' => 200),
		    array('show_id' => 6, 'class' => 1, 'confirmed' => 0, 'capacity' => 300),
		    array('show_id' => 6, 'class' => 2, 'confirmed' => 0, 'capacity' => 200)
		));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('tbsd_shows')->delete();
	}

}
