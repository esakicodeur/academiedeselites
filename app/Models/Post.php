<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
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

    public function getSlug(): string
    {
        return Str::slug($this->title);
    }

    public function shortTitle(): string
    {
        return Str::words(strip_tags($this->title), 2);
    }

    public function shortBody(): string
    {
        return Str::words(strip_tags($this->description), 30);
    }

    public function getFormattedDate(): string
    {
        return $this->created_at->format('F jS Y');
    }

    public function imageUrl(): string
    {
        return Storage::disk('public')->url($this->image);
    }
}
