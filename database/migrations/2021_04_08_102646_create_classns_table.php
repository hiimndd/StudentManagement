<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classns', function (Blueprint $table) {
            $table->increments('id');
            $table->string('classname');
            $table->integer('course_id')->unsigned()->index();
            $table->foreign('course_id')->references('course_id')->on('courses')->onDelete('cascade');

            // $table->integer('course_id')->unsigned();
            // // $table->foreign('course_id')
            // //     ->references('id')
            // //     ->on('courses')
            // //     ->onDelete('cascade');
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
        Schema::dropIfExists('classns');
    }
}
