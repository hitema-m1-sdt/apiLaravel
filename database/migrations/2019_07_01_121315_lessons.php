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
            $table->bigIncrements('id');
            //$table->foreign('idCombatInstructor')->references('id')->on('users')->nullable();
            //$table->foreign('idShooter')->references('id')->on('users')->nullable();
            $table->string('lessonName');
            //$table->foreign('idComment')->references('id')->on('comments')->nullable();
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
