<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddKhaigiangSisoToLophocTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('LOPHOC', function (Blueprint $table) {
            $table->date('khaigiang')->after('hocphi');
            $table->integer('siso')->after('ten')->default(16);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('LOPHOC', function (Blueprint $table) {
            $table->dropColumn('khaigiang');
            $table->dropColumn('siso');
        });
    }
}
