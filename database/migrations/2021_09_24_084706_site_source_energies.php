<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SiteSourceEnergies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_source_energies', function (Blueprint $table) {
            $table->bigIncrements('id_site_source_energie');
            $table->integer('site_id')->index('fk_site');
            $table->integer('source_energie_id')->index('fk_source_energie');
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
