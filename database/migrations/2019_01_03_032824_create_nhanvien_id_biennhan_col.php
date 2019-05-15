<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhanvienIdBiennhanCol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('BIENNHAN', function (Blueprint $table) {
            $table->integer('nhanvien_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('BIENNHAN', function (Blueprint $table) {
            $table->dropColumn('nhanvien_id');
        });
    }
}
