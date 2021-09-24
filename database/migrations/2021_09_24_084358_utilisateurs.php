<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Utilisateurs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateur', function (Blueprint $table) {
            $table->bigIncrements('id_utilisateur');
            $table->string('fisrt_name', 125);
            $table->string('last_name', 125);
            $table->string('email', 125);
            $table->string('user_name', 125);
            $table->string('phone', 125);
            $table->string('password', 125);
            $table->integer('role_id')->index('fk_role');
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
