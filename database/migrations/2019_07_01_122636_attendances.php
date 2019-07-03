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
            $table->integer('idUser')->unsigned()->nullable();
        });

        schema::table('attendances', function (Blueprint $table){
            $table->foreign('idTraining')->references('id')->on('trainings');
              $table->foreign('idUser')->references('id')->on('users');
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
