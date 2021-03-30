<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormuler extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formuler', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_utilisateur')->unsigned();
            $table->integer('id_candidature')->unsigned();
            $table->foreign('id_utilisateur')->references('id')->on('utilisateur')
                ->onUpdate('restrict')
                ->onDelete('restrict');
            $table->foreign('id_candidature')->references('id')->on('candidature')
                ->onUpdate('restrict')
                ->onDelete('restrict');
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
        Schema::dropIfExists('formuler');
    }
}
