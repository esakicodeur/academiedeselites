<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Policy extends Model
{
    use HasFactory;

    protected $fillable = ['description'];


    public function shortBodyAdmin(): string
    {
        return Str::words(strip_tags($this->description), 10);
    }
}
