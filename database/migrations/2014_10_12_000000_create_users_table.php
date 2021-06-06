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
            $table->string('username')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->string('email')->unique();
            $table->string('prefix');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('gender');
            $table->string('duringpregnancy')->nullable();
            $table->string('breastfeeding')->nullable();
            $table->string('givebirth_past_6')->nullable();
            $table->string('typeblood');
            $table->string('typerh');
            $table->string('date');
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
        Schema::dropIfExists('users');
    }
}
