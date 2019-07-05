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
            $table->increments('id');
            $table->integer('idShooter')->unsigned()->nullable();
            $table->string('objectiveName');
            $table->boolean('knowledge');
            $table->string('comment')->nullable();
            $table->timestamps();
        });

        schema::table('objectives', function (Blueprint $table){
            $table->foreign('idShooter')->references('id')->on('users');
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
