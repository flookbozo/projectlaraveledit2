<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospitals', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->string('email');
            $table->string('prefix');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('hospitalname');
            $table->string('hospitaladdress');
            $table->string('provine');
            $table->string('addresscode');
            $table->double('hospitallattitude');
            $table->double('hospitallongitude');
            $table->string('phonnumber');
            $table->string('question');
            $table->string('answer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hospitals');
    }
}
