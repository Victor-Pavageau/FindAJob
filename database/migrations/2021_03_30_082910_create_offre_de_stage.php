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
            $table->string('intitule');
            $table->string('duree_du_stage');
            $table->integer('base_de_remuneration');
            $table->date('date_du_stage');
            $table->string('nombre_de_places');
            $table->integer('id_entreprise')->unsigned();
            $table->foreign('id_entreprise')->references('id')->on('entreprise')
                ->onDelete('restrict')
                ->onUpdate('restrict');
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
        Schema::dropIfExists('offre_de_stage');
    }
}
