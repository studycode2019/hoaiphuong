<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBiennhanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BIENNHAN', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('khachhang_id');
            $table->string('yeucau');
            $table->string('dongmay');
            $table->string('cpu');
            $table->string('ram');
            $table->string('ocung');
            $table->string('khac');
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
        Schema::drop('BIENNHAN');
    }
}
