<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffreDeStage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offre_de_stage', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Intitule');
            $table->integer('Duree');
            $table->integer('Remuneration');
            $table->date('Date');
            $table->integer('Nombre_de_places');
            $table->integer('id_entreprise')->unsigned();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offre_de_stage');
    }
}
