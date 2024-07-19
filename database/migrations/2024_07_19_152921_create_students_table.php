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
            $table->boolean('recommandation')->default(false);
            $table->boolean('publicite')->default(false);
            $table->boolean('reseaux')->default(false);
            $table->boolean('internet')->default(false);
            $table->string('autre')->nullable();
            $table->boolean('lundi')->default(false);
            $table->boolean('mardi')->default(false);
            $table->boolean('mercredi')->default(false);
            $table->boolean('jeudi')->default(false);
            $table->boolean('vendredi')->default(false);
            $table->boolean('samedi')->default(false);
            $table->boolean('dimanche')->default(false);
            $table->longText('objectifs');
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
