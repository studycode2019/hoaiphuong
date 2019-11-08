<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_clients', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('phone')->unique('khachhang_sdt_unique');
			$table->date('birthday')->nullable()->default('NULL');
			$table->timestamps();
			$table->string('zalo')->nullable()->default('NULL');
			$table->string('major')->nullable()->default('NULL');
			$table->string('email')->nullable()->default('NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('_clients');
	}

}
