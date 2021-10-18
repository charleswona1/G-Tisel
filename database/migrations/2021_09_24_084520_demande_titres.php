<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DemandeTitres extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demande_titres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('status');
            $table->integer('user_id')->unsigned();
            $table->integer('site_id')->unsigned();
            $table->integer('activite_id')->unsigned();
            $table->integer('perimetre')->nullable();
            $table->string('lieu_implementation')->nullable();
            $table->string('name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('raison_social')->nullable();
            $table->string('nationalite')->nullable();
            $table->string('domicile')->nullable();
            $table->string('ville')->nullable();
            $table->string('lieu')->nullable();
            $table->string('tel')->nullable();
            $table->string('courriel')->nullable();
            $table->string('fax')->nullable();
            $table->string('code_postal')->nullable();
            $table->string('email')->nullable();
            $table->string('objet')->nullable();
            $table->string('fonction_1')->nullable();
            $table->string('courriel1')->nullable();
            $table->string('fax1')->nullable();
            $table->string('code_postal1')->nullable();
            $table->string('fonction_2')->nullable();
            $table->string('courriel2')->nullable();
            $table->string('fax2')->nullable();
            $table->string('code_postal2')->nullable();
            $table->string('fonction_3')->nullable();
            $table->string('courriel3')->nullable();
            $table->string('fax3')->nullable();
            $table->string('code_postal3')->nullable();
            $table->string('fonction_4')->nullable();
            $table->string('courriel4')->nullable();
            $table->string('fax4')->nullable();
            $table->string('code_postal4')->nullable();
            $table->string('file1')->nullable();
            $table->string('file2')->nullable();
            $table->string('file3')->nullable();
            $table->string('file4')->nullable();
            $table->string('file5')->nullable();
            $table->string('file6')->nullable();
            $table->string('file7')->nullable();
            $table->string('file8')->nullable();
            $table->string('file9')->nullable();
            $table->string('file10')->nullable();
            $table->string('file11')->nullable();
            $table->string('file12')->nullable();
            $table->string('file13')->nullable();
            $table->string('file14')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('site_id')->references('id')->on('sites');
            $table->foreign('activite_id')->references('id')->on('activites');
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
        Schema::dropIfExists('demande_titres');
    }
}
