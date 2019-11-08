<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDownloadsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_downloads', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name')->nullable()->default('NULL');
			$table->string('description')->nullable()->default('NULL');
			$table->string('link');
			$table->string('sha1')->nullable()->default('NULL');
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
		Schema::drop('_downloads');
	}

}
