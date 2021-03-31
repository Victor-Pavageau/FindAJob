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


        Schema::table('interesser', function (Blueprint $table) {
            $table->foreign('id_utilisateur')->references('id')->on('utilisateur')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->foreign('id_offre_de_stage')->references('id')->on('offre_de_stage')
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
        Schema::table('notes', function (Blueprint $table) {
        $table->foreign('id_entreprise')->references('id')->on('entreprise')
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
