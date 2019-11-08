<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCoursesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_courses', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('shortname')->nullable();
			$table->string('name')->nullable();
			$table->integer('maxseat')->default(0);
			$table->integer('tuition');
			$table->date('opening_at');
			$table->integer('lesson')->default(0);
			$table->string('schedule')->nullable();
			$table->string('teacher')->nullable();
			$table->string('note')->nullable();
			$table->softDeletes();
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
		Schema::drop('_courses');
	}

}
