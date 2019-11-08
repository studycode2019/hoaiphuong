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
			$table->string('requestment')->nullable()->default('NULL');
			$table->string('model')->nullable()->default('NULL');
			$table->string('cpu');
			$table->string('ram');
			$table->string('storage')->nullable()->default('NULL');
			$table->string('other')->nullable()->default('NULL');
			$table->timestamps();
			$table->string('note')->nullable()->default('NULL');
			$table->integer('ticket_status_id')->default(1);
			$table->integer('staff_id');
			$table->integer('price')->nullable()->default('NULL');
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
