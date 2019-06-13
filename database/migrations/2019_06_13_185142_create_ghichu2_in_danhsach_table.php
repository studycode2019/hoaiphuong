<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGhichu2InDanhsachTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('LOPHOC_DANHSACH', function (Blueprint $table) {
            $table->string('ghichu2')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('LOPHOC_DANHSACH', function (Blueprint $table) {
            $table->dropColumn('ghichu2');
        });
    }
}
