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
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('description');
            $table->string('publication')->default("on")->nullable();
            $table->string('localite');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('capacite');
            $table->integer('arrondissement_id')->unsigned();
            $table->foreign('arrondissement_id')->references('id')->on('arrondissements')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('regime_id')->unsigned();
            $table->integer('sourcee_id')->unsigned();
            $table->foreign('regime_id')->references('id')->on('regimes')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('sourcee_id')->references('id')->on('source_energies')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('sites');
    }
}
