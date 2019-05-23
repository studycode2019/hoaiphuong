<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeSotienInPhieuthuPhieuchiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('PHIEUTHU', function (Blueprint $table) {
            $table->unsignedBigInteger('sotien')->change();
        });
        Schema::table('PHIEUCHI', function (Blueprint $table) {
            $table->unsignedBigInteger('sotien')->change();
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
            $table->integer('sotien')->change();
        });
        Schema::table('PHIEUCHI', function (Blueprint $table) {
            $table->integer('sotien')->change();
        });
    }
}
