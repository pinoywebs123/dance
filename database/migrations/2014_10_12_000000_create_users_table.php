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
            $table->unsignedBigInteger('role_id');
            $table->string('student_id')->index();
            $table->string('name');
            $table->string('email')->unique();
            $table->unsignedBigInteger('status_id');
            $table->string('age');
            $table->string('sex');
            $table->string('college_year');
            $table->string('college');
            $table->string('program');
            $table->string('contact');
            $table->string('fb_link');
            $table->string('password');
            $table->string('youtube_link');
            $table->rememberToken();
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
