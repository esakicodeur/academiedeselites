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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('email');
            $table->string('phone');
            $table->string('adresse');
            $table->string('code_postal');
            $table->string('pays');
            $table->string('ville');
            $table->string('langues');
            $table->string('etablissement_actuel');
            $table->string('poste_occupe');
            $table->string('duree');
            $table->string('etablissement_precedent');
            $table->string('experiences');
            $table->string('diplomes');
            $table->string('niveau');
            $table->string('specialisation');
            $table->string('certifications');
            $table->boolean('mathematiques')->default(false);
            $table->boolean('physiques')->default(false);
            $table->boolean('chimie')->default(false);
            $table->boolean('svt')->default(false);
            $table->boolean('francais')->default(false);
            $table->boolean('anglais')->default(false);
            $table->boolean('allemand')->default(false);
            $table->boolean('espagnol')->default(false);
            $table->boolean('informatique')->default(false);
            $table->boolean('histoire_geo_ecm')->default(false);
            $table->boolean('phylosophie')->default(false);
            $table->boolean('Primaire')->default(false);
            $table->boolean('Secondaire')->default(false);
            $table->boolean('Universitaire')->default(false);
            $table->boolean('lundi')->default(false);
            $table->boolean('mardi')->default(false);
            $table->boolean('mercredi')->default(false);
            $table->boolean('jeudi')->default(false);
            $table->boolean('vendredi')->default(false);
            $table->boolean('samedi')->default(false);
            $table->boolean('dimanche')->default(false);
            $table->string('plages');
            $table->longText('methodologie');
            $table->longText('motivation');
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
        Schema::dropIfExists('teachers');
    }
};
