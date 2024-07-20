<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function getSlug(): string
    {
        return Str::slug($this->name);
    }


    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }


}
