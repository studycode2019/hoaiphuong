<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTinhtrangBiennhanCol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('BIENNHAN', function (Blueprint $table) {
            $table->string('tinhtrang');
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
            $table->dropColumn('tinhtrang');
        });
    }
}
