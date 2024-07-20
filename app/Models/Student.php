<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'recommandation',
        'publicite',
        'reseaux',
        'internet',
        'autre',
        'lundi',
        'mardi',
        'mercredi',
        'jeudi',
        'vendredi',
        'samedi',
        'dimanche',
        'objectifs',
        'mathematiques',
        'physiques',
        'chimie',
        'svt',
        'francais',
        'anglais',
        'allemand',
        'espagnol',
        'informatique',
        'histoire_geo_ecm',
        'phylosophie',
        'nom',
        'prenom',
        'email',
        'phone',
        'adresse',
        'code_postal',
        'pays',
        'ville',
        'niveau',
        'etablissement_actuel',
        'accepte',
    ];

    public function getSlug(): string
    {
        return Str::slug($this->nom);
    }
}
