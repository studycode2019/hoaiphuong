<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePHIEUTHUTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PHIEUTHU', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('solai');
            $table->integer('khachhang_id');
            $table->string('noidung');
            $table->integer('sotien');
            $table->integer('nhanvien_id');
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
        Schema::drop('PHIEUTHU');
    }
}
