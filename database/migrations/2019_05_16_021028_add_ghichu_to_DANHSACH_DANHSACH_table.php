<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGhichuToDANHSACHDANHSACHTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('LOPHOC_DANHSACH', function (Blueprint $table) {
            $table->string('ghichu')->nullable()->after('dadong');
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
            $table->dropColumn('ghichu');
        });
    }
}
