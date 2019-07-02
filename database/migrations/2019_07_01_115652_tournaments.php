<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class tournaments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tournaments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('localisation');
            $table->dateTime('DateHour');
            $table->unsignedInteger('idCategory')->nullable();
        });

        Schema::table('tournaments', function (Blueprint $table) {
            $table->foreign('idCategory')->references('id')->on('categories');
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
            Schema::dropIfExists('tournaments');
        }
    }
}
