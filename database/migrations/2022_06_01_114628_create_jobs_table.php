<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('comp_name');
            $table->string('job_title');
            $table->longText('job_description');
            $table->string('benefit')->nullable();
            $table->string('skills');
            $table->string('country');
            $table->string('state')->nullable();
            $table->string('city');
            $table->string('carrier_level');
            $table->string('salary_from');
            $table->string('salary_to');
            $table->string('salaray_period');
            $table->string('functional_area');
            $table->string('job_type');
            $table->string('job_shift')->nullable();
            $table->string('position');
            $table->string('gender');
            $table->string('job_expire_date');
            $table->boolean('status')->default(1);
            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies');
            $table->softDeletes();

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
