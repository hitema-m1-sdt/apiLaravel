<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Objectives extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('objectives', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->foreign('idShooter')->references('id')->on('user')->nullable();
            $table->string('objectiveName');
            $table->boolean('knowledge');
            $table->foreign('idComment')->references('id')->on('comments')->nullable();
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
            schema::dropIfExists('objectives');
        }
    }
}
