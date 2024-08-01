<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Faq extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description'];

    public function getSlug(): string
    {
        return Str::slug($this->title);
    }

    public function shortTitle(): string
    {
        return Str::words(strip_tags($this->title), 2);
    }

    public function shortTitleAdmin(): string
    {
        return Str::words(strip_tags($this->title), 8);
    }

    public function shortBody(): string
    {
        return Str::words(strip_tags($this->description), 30);
    }

    public function shortBodyAdmin(): string
    {
        return Str::words(strip_tags($this->description), 10);
    }

    public function getFormattedDate(): string
    {
        return $this->created_at->diffForHumans();
    }
}
