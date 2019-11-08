<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLophocNhatkyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LOPHOC_NHATKY', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nhanvien_id');
            $table->integer('khachhang_id')->nullable();
            $table->integer('lophoc1_id')->nullable();
            $table->integer('lophoc2_id')->nullable();
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
        Schema::drop('LOPHOC_NHATKY');
    }
}
