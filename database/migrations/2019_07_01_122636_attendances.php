<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Attendances extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('attendances', function (Blueprint $table){
            $table->increments('id');
            $table->integer('idTraining')->unsigned()->nullable();
            $table->boolean('confirmed');
            $table->date('date');
        });

        schema::table('attendances', function (Blueprint $table){
            $table->foreign('idTraining')->references('id')->on('trainings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        {
            schema::dropIfExists('attendances');
        }
    }
}
