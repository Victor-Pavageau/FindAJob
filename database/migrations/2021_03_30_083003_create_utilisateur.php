<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtilisateur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateur', function (Blueprint $table) {
            $table->increments('id');
            $table->string('password');
            $table->string('Nom');
            $table->string('Prenom');
            $table->integer('Type');
            $table->string('Centre');
            $table->string('CV')->nullable();
            $table->string('Lettre_de_motivation')->nullable();
            $table->string('E_mail');
            $table->timestamps();
            $table->integer('id_promotion')->unsigned();
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utilisateur');
    }
}
