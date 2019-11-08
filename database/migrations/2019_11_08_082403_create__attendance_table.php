<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAttendanceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_attendance', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('lophoc_danhsach_id');
			$table->integer('buoi');
			$table->boolean('comat');
			$table->softDeletes()->default('NULL');
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
		Schema::drop('_attendance');
	}

}
