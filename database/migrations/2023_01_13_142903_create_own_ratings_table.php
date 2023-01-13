<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('own_ratings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('audition_id');
            $table->unsignedBigInteger('coach_id');
            $table->string('remark');
            $table->integer('music');
            $table->integer('originality');
            $table->integer('choreography');
            $table->integer('personality');
            $table->integer('memory');
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
        Schema::dropIfExists('own_ratings');
    }
}
