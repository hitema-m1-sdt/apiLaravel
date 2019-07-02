<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TournamentsReferees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('tournamentsReferees', function (Blueprint $table){
            $table->increments('id');
            $table->integer('idReferee')->unsigned()->nullable();
            $table->integer('idTournament')->unsigned()->nullable();
        });

        schema::table('tournamentsReferees', function (Blueprint $table){
            $table->foreign('idReferee')->references('id')->on('referees');
            $table->foreign('idTournament')->references('id')->on('tournaments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::dropIfexists('tournamentsReferess');
    }
}
