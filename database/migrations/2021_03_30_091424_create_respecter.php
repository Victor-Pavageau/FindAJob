<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespecter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respecter', function (Blueprint $table) {
            $table->integer('id_utilisateur')->unsigned();
            $table->integer('id_droit')->unsigned();
            $table->foreign('id_utilisateur')->references('id')->on('utilisateur')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->foreign('id_droit')->references('id')->on('droit')
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
        Schema::dropIfExists('respecter');
    }
}
