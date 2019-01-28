<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumns2ToJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jobs', function (Blueprint $table) {
            $table->enum('category',['hosteleria','transporte','buzoneo','alimentacion'])->after('payment')->nullable();
            $table->uuid('uuid')->after('id');
            $table->string('email_creator')->after('uuid');
            $table->date('expired_at')->after('category');
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
          $table->dropColumn('category');
          $table->dropColumn('uuid');
          $table->dropColumn('email_creator');
          $table->dropColumn('expired_at');
        });
    }
}
