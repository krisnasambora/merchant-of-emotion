<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbsd_admins', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('username');
			$table->string('mail')->unique();
			$table->string('password');
			$table->string('remember_token', 100)->nullable();

			$table->timestamps();
		});

		DB::table('tbsd_admins')->insert(array(
				'username' => 'tbsd_admin',
				'mail' => 'onit@merchantofemotion.com',
				'password' => Hash::make('josgojos')
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
		Schema::drop('tbsd_admins');
	}

}
