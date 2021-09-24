<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Arrondissements extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arrondissements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('departement_id')->unsigned();
            $table->foreign('departement_id')->references('id')->on('departements')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('arrondissements');
    }
}
