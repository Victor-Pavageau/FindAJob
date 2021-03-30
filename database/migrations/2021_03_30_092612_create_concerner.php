<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConcerner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('concerner', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_offre_de_stage')->unsigned();
            $table->integer('id_candidature')->unsigned();
            $table->foreign('id_offre_de_stage')->references('id')->on('offre_de_stage')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign('id_candidature')->references('id')->on('candidature')->onUpdate('restrict')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('concerner');
    }
}
