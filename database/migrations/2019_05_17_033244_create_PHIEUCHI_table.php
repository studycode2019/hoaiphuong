<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePHIEUCHITable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PHIEUCHI', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('solai');
            $table->string('ten');
            $table->integer('sotien');
            $table->string('noidung');
            $table->string('ghichu')->nullable;
            $table->integer('nhanvien_id');
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
        Schema::drop('PHIEUCHI');
    }
}
