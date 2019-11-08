<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCourseStudentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_course_students', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('course_id');
			$table->integer('client_id');
			$table->integer('deal_rate')->default(0);
			$table->integer('tuition_done')->default(0);
			$table->string('deal_note')->nullable()->default('NULL');
			$table->softDeletes()->default('NULL');
			$table->timestamps();
			$table->string('note')->nullable()->default('NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('_course_students');
	}

}
