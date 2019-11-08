<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNHATKYTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('NHATKY', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('biennhan_id');
            $table->integer('nhanvien_id');
            $table->string('noidung');
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
        Schema::drop('NHATKY');
    }
}
