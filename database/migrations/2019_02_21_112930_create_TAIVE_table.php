<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTAIVETable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TAIVE', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten');
            $table->string('mota')->nullable();
            $table->string('link');
            $table->string('sha1')->nullable();
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
        Schema::drop('TAIVE');
    }
}
