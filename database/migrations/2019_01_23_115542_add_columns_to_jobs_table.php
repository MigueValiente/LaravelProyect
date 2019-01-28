<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jobs', function (Blueprint $table) {
            // $table->integer('id_client')->after('description');
            // $table->string('client_contact')->after('id_client');
            // $table->integer('id_employee')->after('client_contact');
            // $table->string('employee_contact')->after('id_employee');
            $table->string('province')->after('description')->nullable();
            $table->double('payment', 8,2)->after('province');
            $table->string('slug')->after('payment')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jobs', function (Blueprint $table) {
            // $table->dropColumn('id_client');
            // $table->dropColumn('client_contact');
            // $table->dropColumn('id_employee');
            // $table->dropColumn('employee_contact');
            $table->dropColumn('province');
            $table->dropColumn('payment');
            $table->dropColumn('slug');
        });
    }
}
