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
