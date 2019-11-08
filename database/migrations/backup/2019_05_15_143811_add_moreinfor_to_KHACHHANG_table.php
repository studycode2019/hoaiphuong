<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMoreinforToKHACHHANGTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('KHACHHANG', function (Blueprint $table) {
            $table->string('zalo')->nullable();
            $table->string('nganhhoc')->nullable();
            $table->string('email')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('KHACHHANG', function (Blueprint $table) {
            $table->dropColumn('zalo');
            $table->dropColumn('nganhhoc');
            $table->dropColumn('email');
        });
    }
}
