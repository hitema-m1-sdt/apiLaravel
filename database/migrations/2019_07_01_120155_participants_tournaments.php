<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ParticipantsTournaments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('participantsTournaments', function (Blueprint $table){
            $table->increments('id');
            $table->integer('idCompetition')->unsigned()->nullable();
            $table->integer('idUser')->unsigned()->nullable();
           });

        Schema::table('participantsTournaments', function (Blueprint $table) {
            $table->foreign('idCompetition')->references('id')->on('tournaments');
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
            Schema::dropIfExists('participantsTournaments');
        }
    }
}
