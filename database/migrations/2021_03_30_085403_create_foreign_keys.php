<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('appartenir', function (Blueprint $table) {
            $table->foreign('id_utilisateur')->references('id')->on('utilisateur')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->foreign('id_promotion')->references('id')->on('promotion')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });

        Schema::table('candidature', function (Blueprint $table) {
            $table->foreign('id_utilisateur')->references('id')->on('utilisateur')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->foreign('id_offre_de_stage')->references('id')->on('offre_de_stage')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });



        Schema::table('interesser', function (Blueprint $table) {
            $table->foreign('id_utilisateur')->references('id')->on('utilisateur')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->foreign('id_offre_de_stage')->references('id')->on('offre_de_stage')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });

        Schema::table('offre_de_stage', function (Blueprint $table) {
            $table->foreign('id_entreprise')->references('id')->on('entreprise')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            
        });

        Schema::table('posseder', function (Blueprint $table) {
            $table->foreign('id_utilisateur')->references('id')->on('utilisateur')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->foreign('id_competence')->references('id')->on('competence')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });

        Schema::table('requerir', function (Blueprint $table) {
            $table->foreign('id_competence')->references('id')->on('competence')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->foreign('id_offre_de_stage')->references('id')->on('offre_de_stage')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });

        Schema::table('viser', function (Blueprint $table) {
            $table->foreign('id_promotion')->references('id')->on('promotion')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->foreign('id_offre_de_stage')->references('id')->on('offre_de_stage')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });

        Schema::table('concerner', function (Blueprint $table) {
            $table->foreign('id_candidature')->references('id')->on('candidature')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->foreign('id_offre_de_stage')->references('id')->on('offre_de_stage')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });

        Schema::table('formuler', function (Blueprint $table) {
            $table->foreign('id_utilisateur')->references('id')->on('utilisateur')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->foreign('id_candidature')->references('id')->on('candidature')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });

        Schema::table('proposer', function (Blueprint $table) {
            $table->foreign('id_entreprise')->references('id')->on('entreprise')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->foreign('id_offre_de_stage')->references('id')->on('offre_de_stage')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });

        Schema::table('respecter', function (Blueprint $table) {
            $table->foreign('id_utilisateur')->references('id')->on('utilisateur')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->foreign('id_droit')->references('id')->on('droit')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foreign_keys');
    }
}
