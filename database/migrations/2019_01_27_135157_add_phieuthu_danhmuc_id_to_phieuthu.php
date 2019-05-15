<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPhieuthuDanhmucIdToPhieuthu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('PHIEUTHU', function (Blueprint $table) {
            $table->integer('phieuthu_danhmuc_id')->defalt(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('PHIEUTHU', function (Blueprint $table) {
            $table->dropColumn('phieuthu_danhmuc_id');
        });
    }
}
