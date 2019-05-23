<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDanhmucToPhieuchhiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('PHIEUCHI', function (Blueprint $table) {
            $table->integer('phieuthu_danhmuc_id')->default(1);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('PHIEUCHI', function (Blueprint $table) {
            $table->dropColumn('phieuthu_danhmuc_id');
        });
    }
}
