<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDIEMDANHTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DIEMDANH', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lophoc_danhsach_id');
            $table->integer('buoi');
            $table->boolean('comat');
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::table('LOPHOC', function (Blueprint $table) {
            $table->integer('sobuoi')->after('hocphi')->default(12);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('DIEMDANH');

        Schema::table('LOPHOC', function (Blueprint $table) {
            $table->dropColumn('sobuoi');
        });
    }
}
