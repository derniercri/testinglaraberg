<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use VanOns\Laraberg\Models\Gutenbergable;

class Post extends Model
{
    use HasFactory;
    use HasFactory;
    use Gutenbergable;

    protected $fillable = [
        'title', 'body', 'excerpt', 'user_id', 'category_id', 'age_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function ages(): HasMany
    {
        return $this->hasMany(Age::class);
    }

    public function tags(): HasMany
    {
        return $this->hasMany(Tag::class);
    }
}
