<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Licences extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('licences', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('licenceNumber');
            $table->integer('idUser')->unsigned()->nullable();
            $table->Date('startDate');
            $table->Date('endDate');
        });

        schema::table('licences', function (Blueprint $table){
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
        schema::DropIfExists('licences');
    }
}