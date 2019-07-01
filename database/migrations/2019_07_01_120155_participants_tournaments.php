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
            $table->bigIncrements('id');
            $table->foreign('idCompetition')->references('id')->on('tournament')->nullable();
            $table->foreign('idUser')->references('id')->on('users')->nullable();
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
