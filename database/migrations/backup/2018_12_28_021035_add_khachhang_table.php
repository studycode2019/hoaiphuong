<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddKhachhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('KHACHHANG', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten');
            $table->string('sdt');
            $table->date('ngaysinh');
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
        Schema::drop('KHACHHANG');
    }
}
