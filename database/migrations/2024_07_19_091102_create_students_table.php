<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->boolean('recommandation');
            $table->boolean('publicite');
            $table->boolean('reseaux');
            $table->boolean('internet');
            $table->string('autre');
            $table->boolean('lundi');
            $table->boolean('mardi');
            $table->boolean('mercredi');
            $table->boolean('jeudi');
            $table->boolean('vendredi');
            $table->boolean('samedi');
            $table->boolean('dimanche');
            $table->longText('objectifs');
            $table->boolean('mathematiques');
            $table->boolean('physiques');
            $table->boolean('chimie');
            $table->boolean('svt');
            $table->boolean('francais');
            $table->boolean('anglais');
            $table->boolean('allemand');
            $table->boolean('espagnol');
            $table->boolean('informatique');
            $table->boolean('histoire_geo_ecm');
            $table->boolean('phylosophie');
            $table->string('nom');
            $table->string('prenom');
            $table->string('email');
            $table->string('phone');
            $table->string('adresse');
            $table->string('code_postal');
            $table->string('pays');
            $table->string('ville');
            $table->string('niveau');
            $table->string('etablissement_actuel');
            $table->boolean('accepte');
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
        Schema::dropIfExists('students');
    }
};
