<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCongkhaiNhatkyCol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('NHATKY', function (Blueprint $table) {
            $table->boolean('congkhai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('NHATKY', function (Blueprint $table) {
            $table->dropColumn('congkhai');
        });
    }
}
