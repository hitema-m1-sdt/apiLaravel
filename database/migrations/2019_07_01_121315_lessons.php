<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Lessons extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create ('lessons', function (Blueprint $table){
            $table->increments('id');
            $table->integer('idCombatInstructor')->unsigned()->nullable();
            $table->integer('idShooter')->unsigned()->nullable();
            $table->string('lessonName');
            $table->integer('idComment')->unsigned()->nullable();
        });

        Schema::table('lessons', function (Blueprint $table) {
            $table->foreign('idCombatInstructor')->references('id')->on('users');
            $table->foreign('idShooter')->references('id')->on('users');
            $table->foreign('idComment')->references('id')->on('comments');
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
            Schema::dropIfExists('lessons');
        }
    }
}
