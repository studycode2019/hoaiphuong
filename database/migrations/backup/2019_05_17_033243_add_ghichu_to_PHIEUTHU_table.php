<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGhichuToPHIEUTHUTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('PHIEUTHU', function (Blueprint $table) {
            $table->softDeletes();
            $table->string('ghichu')->nullable();
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
            $table->dropColumn('ghichu');
            $table->dropColumn('deleted_at');
        });
    }
}
