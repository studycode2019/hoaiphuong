<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNHANVIENTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('NHANVIEN', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sdt')->unique();
            $table->string('matkhau');
            $table->string('ten');
            $table->date('ngaysinh');
            $table->rememberToken();
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
        Schema::drop('NHANVIEN');
    }
}
