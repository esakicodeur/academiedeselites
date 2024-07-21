<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;

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
        'plages',
        'methodologie',
        'motivation',
    ];

    public function jours(): BelongsToMany
    {
        return $this->belongsToMany(Jour::class);
    }

    public function matieres(): BelongsToMany
    {
        return $this->belongsToMany(Matiere::class);
    }

    public function niveaux(): BelongsToMany
    {
        return $this->belongsToMany(Niveau::class);
    }

    public function getSlug(): string
    {
        return Str::slug($this->nom);
    }
}
