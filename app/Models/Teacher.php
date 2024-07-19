<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'phone',
        'adresse',
        'code_postal',
        'pays',
        'ville',
        'langues',
        'etablissement_actuel',
        'poste_occupe',
        'duree',
        'etablissement_precedent',
        'experiences',
        'diplomes',
        'niveau',
        'specialisation',
        'certifications',
        'Primaire',
        'Secondaire',
        'Universitaire',
        'plages',
        'methodologie',
        'motivation',
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
    ];
}
