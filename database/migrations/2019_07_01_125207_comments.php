<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Comments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('comments', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->date('creationDate');
            $table->integer('idAuthor')->unsigned()->nullable();
            $table->longText('message');
        });

        schema::table('comments', function (Blueprint $table){
            $table->foreign('idAuthor')->references('id')->on('users');
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
            schema::droptIfExists('comments');
        }
    }
}
