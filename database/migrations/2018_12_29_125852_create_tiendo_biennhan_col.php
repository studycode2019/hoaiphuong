<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTiendoBiennhanCol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('BIENNHAN', function (Blueprint $table) {
            $table->boolean('tiendo');
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
            $table->dropColumn('tiendo');
        });
    }
}
