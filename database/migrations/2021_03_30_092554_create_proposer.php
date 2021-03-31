<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProposer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposer', function (Blueprint $table) {
            $table->integer('id_entreprise')->unsigned();
            $table->integer('id_offre_de_stage')->unsigned();
            $table->foreign('id_entreprise')->references('id')->on('entreprise')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->foreign('id_offre_de_stage')->references('id')->on('offre_de_stage')
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
        Schema::dropIfExists('proposer');
    }
}
