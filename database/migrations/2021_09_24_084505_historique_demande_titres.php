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
            $table->bigIncrements('id_historique');
            $table->string('status', 125);
            $table->integer('demande_titre_id')->index('fk_demande_titre');
            $table->integer('service_etude_id')->index('fk_service_etude');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
