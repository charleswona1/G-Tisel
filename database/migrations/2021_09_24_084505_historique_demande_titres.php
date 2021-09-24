<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HistoriqueDemandeTitres extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historique_demande_titres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('status');
            $table->integer('demande_titre_id')->unsigned();
            $table->foreign('demande_titre_id')->references('id')->on('demande_titres')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('service_etude_id')->unsigned();
            $table->foreign('service_etude_id')->references('id')->on('service_etudes')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('historique_demande_titres');
    }
}
