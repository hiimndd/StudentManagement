<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassnTimeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classn_time', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('classn_id')->unsigned()->index();
            $table->foreign('classn_id')->references('id')->on('classns')->onDelete('cascade');

            $table->integer('time_id')->unsigned()->index();
            $table->foreign('time_id')->references('id')->on('times')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classn_time');
    }
}
