<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Sites extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sites', function (Blueprint $table) {
            $table->bigIncrements('id_site');
            $table->string('libelle_site', 125);
            $table->text('description_site');
            $table->string('image_site', 125);
            $table->string('publication', 125);
            $table->string('localite', 125);
            $table->string('latitude', 125);
            $table->string('longitude', 125);
            $table->string('capacite', 125);
            $table->integer('arrondissement_id')->index('fk_arrondissement');
            $table->integer('regime_id')->index('fk_regime');
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
