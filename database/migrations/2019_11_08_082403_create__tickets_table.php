<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicketsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_tickets', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('client_id');
			$table->string('address')->nullable();
			$table->string('description')->nullable();
			$table->string('length');
			$table->string('width');
			$table->string('manager')->nullable();
			$table->string('other')->nullable();
			$table->timestamps();
			$table->string('note')->nullable();
			$table->integer('ticket_status_id')->default(1);
			$table->integer('staff_id');
			$table->integer('price')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('_tickets');
	}

}
