<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBranchIDCol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('_receipt', function (Blueprint $table) {
            $table->integer('branch_id')->after('phieuthu_danhmuc_id')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('_receipt', function (Blueprint $table) {
            $table->dropColumn('branch_id');
        });
    }
}
