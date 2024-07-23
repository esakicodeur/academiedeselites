<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
    ];

    public function shortTitleAdmin(): string
    {
        return Str::words(strip_tags($this->title), 5);
    }

    public function shortBodyAdmin(): string
    {
        return Str::words(strip_tags($this->description), 8);
    }
}
