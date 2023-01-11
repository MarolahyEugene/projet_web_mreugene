<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtilisateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateurs', function (Blueprint $table) {

            $table->id('id_utilisateur')->increments();
            $table->string('first_name', 128);
            $table->string('last_name', 200)->nullable();
            $table->string('sexe');
            $table->date('naissance');
            $table->string('adresse', 218);
            $table->string('titres');
            $table->foreign('titres')->references('titles')->on('titres');
            $table->string('nationalite');
            $table->string('email')->unique();
            $table->string('password', 18);
            
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
        Schema::dropIfExists('utilisateurs');
    }
}
