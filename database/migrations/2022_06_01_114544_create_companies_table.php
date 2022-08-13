<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('logo');
            // $table->string('designation');
            $table->string('industry');
            $table->string('ownership_type');
            $table->longText('company_description');
            $table->string('no_of_offices');
            $table->string('no_of_employees');
            $table->string('established_in');
            $table->string('fax')->nullable();
            $table->string('phone_number');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('package');
            $table->boolean('status')->default(1);
            $table->boolean('feature')->default(1);
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
        Schema::dropIfExists('companies');
    }
}
