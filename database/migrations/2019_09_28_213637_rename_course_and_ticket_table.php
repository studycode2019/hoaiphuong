<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameCourseAndTicketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $from = array('_case' , '_case_status', '_client', '_class', '_class_list', '_class_log', '_staff', '_case_log', '_payment', '_receipt', '_receipt_cate', '_download', '_branch', '_group');
        $to = array('_tickets' , '_ticket_statuses', '_clients', '_courses', '_course_students', '_course_logs', '_staffs', '_ticket_logs', '_payments', '_receipts', '_fields', '_downloads', '_branches', '_groups');
        for($i=0; $i<count($from); $i++) {
            Schema::rename($from[$i], $to[$i]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
