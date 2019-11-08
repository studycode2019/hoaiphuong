<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLOPHOCTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LOPHOC', function (Blueprint $table) {
            $table->increments('id');
            $table->string('malophoc');
            $table->string('ten');
            $table->integer('hocphi');
            $table->string('lichhoc');
            $table->string('giangvien');
            $table->string('ghichu')->nullable();
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
        Schema::drop('LOPHOC');
    }
}
