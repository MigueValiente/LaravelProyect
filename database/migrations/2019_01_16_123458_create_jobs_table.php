<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid');
            $table->string('job_name');
            $table->string('slug')->unique();
            $table->text('description');
            $table->string('province')->nullable();
            $table->double('payment', 8,2);
            $table->enum('category',['hosteleria','transporte','buzoneo','alimentacion'])->nullable();
            $table->date('expired_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
