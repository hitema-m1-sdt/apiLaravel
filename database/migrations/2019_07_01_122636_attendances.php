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
            $table->bigIncrements('id');
            //$table->foreign('idLesson')->references('id')->on('lessons')->nullable();
            $table->boolean('confirmed');
            $table->date('date');
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
