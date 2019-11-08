<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStaffsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_staffs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('phone')->unique('nhanvien_sdt_unique');
			$table->string('password');
			$table->integer('level')->default(0);
			$table->string('name')->nullable()->default('NULL');
			$table->date('birthday')->nullable()->default('NULL');
			$table->string('remember_token', 100)->nullable()->default('NULL');
			$table->timestamps();
			$table->integer('group_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('_staffs');
	}

}
