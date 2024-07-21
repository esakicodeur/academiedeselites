<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'autre',
        'objectifs',
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

    public function informations(): BelongsToMany
    {
        return $this->belongsToMany(Information::class);
    }

    public function jours(): BelongsToMany
    {
        return $this->belongsToMany(Jour::class);
    }

    public function matieres(): BelongsToMany
    {
        return $this->belongsToMany(Matiere::class);
    }

    public function getSlug(): string
    {
        return Str::slug($this->nom);
    }
}
