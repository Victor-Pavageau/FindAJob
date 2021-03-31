<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donner', function (Blueprint $table) {
            $table->integer('id_utilisateur')->unsigned();
            $table->integer('id_entreprise')->unsigned();
            $table->foreign('id_utilisateur')->references('id')->on('utilisateur')
                ->onDelete('restrict')
                ->onUpdate('restrict');
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
        Schema::dropIfExists('donner');
    }
}
