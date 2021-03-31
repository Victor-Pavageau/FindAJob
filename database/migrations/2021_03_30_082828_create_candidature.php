<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidature extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidature', function (Blueprint $table) {
            $table->increments('id');
            $table->date('Date');
            $table->string('Fiche_de_validation')->nullable();
            $table->string('Convention')->nullable();
            $table->integer('Statut');
            $table->integer('id_offre_de_stage')->unsigned();
            $table->integer('id_utilisateur')->unsigned();
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
        Schema::dropIfExists('candidature');
    }
}
