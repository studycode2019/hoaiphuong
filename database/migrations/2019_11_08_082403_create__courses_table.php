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
			$table->string('shortname')->nullable()->default('NULL');
			$table->string('name')->nullable()->default('NULL');
			$table->integer('maxseat')->default(0);
			$table->integer('tuition');
			$table->date('opening_at');
			$table->integer('lesson')->default(0);
			$table->string('schedule')->nullable()->default('NULL');
			$table->string('teacher')->nullable()->default('NULL');
			$table->string('note')->nullable()->default('NULL');
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
		Schema::drop('_courses');
	}

}
