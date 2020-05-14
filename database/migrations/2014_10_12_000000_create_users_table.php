<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('gender');
            $table->string('civil_status');
            $table->string('degree');
            $table->string('year');
            $table->string('emp_status');
            $table->string('job_type')->nullable();
            $table->string('position')->nullable();
            $table->string('part_time')->nullable();
            $table->string('tenure')->nullable();
            $table->string('salary')->nullable();
            $table->string('comp_type')->nullable();
            $table->string('private')->nullable();;
            $table->string('job_search');
            $table->text('venture')->nullable();
            $table->text('knowledge')->nullable();
            $table->text('skills')->nullable();
            $table->text('curriculum')->nullable();
            $table->text('faculty')->nullable();
            $table->string('facilities')->nullable();
            $table->string('masters_degree')->nullable();
            $table->string('masters_year')->nullable();
            $table->string('doctors_degree')->nullable();
            $table->string('doctors_year')->nullable();
            $table->text('seminars')->nullable();;
            $table->string('certificates')->nullable();
            $table->string('alumni_status')->default('pending');
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
        Schema::dropIfExists('users');
    }
}
