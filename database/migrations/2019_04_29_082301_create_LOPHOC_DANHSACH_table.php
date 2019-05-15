<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLOPHOCDANHSACHTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LOPHOC_DANHSACH', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lophoc_id');
            $table->integer('khachhang_id');
            $table->integer('uudai')->default(0);
            $table->integer('dadong')->default(0);
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
        Schema::drop('LOPHOC_DANHSACH');
    }
}
