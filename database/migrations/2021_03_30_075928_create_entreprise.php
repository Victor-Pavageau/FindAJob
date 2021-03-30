<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntreprise extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprise', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_entreprise');
            $table->string('Secteur');
            $table->string('Localite');
            $table->integer('Nombre_de_stagiaire_CESI');
            $table->integer('Note_globale');
            $table->integer('Confiance');
            $table->string('E_mail');
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
        Schema::dropIfExists('entreprise');
    }
}
