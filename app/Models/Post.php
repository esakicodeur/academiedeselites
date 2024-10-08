<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'category_id',
        'active'
    ];

    protected $casts = [
        'created_at' => 'datetime'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function favorite_to_users(): BelongsToMany
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }

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

    public function imageUrl(): string
    {
        return Storage::disk('public')->url($this->image);
    }
}
