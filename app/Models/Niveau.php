<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Niveau extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function teachers(): BelongsToMany
    {
        return $this->belongsToMany(Teacher::class);
    }
}
