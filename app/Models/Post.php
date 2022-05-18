<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use VanOns\Laraberg\Models\Content;
use VanOns\Laraberg\Models\Gutenbergable;

class Post extends Model
{
    use HasFactory;
    use Gutenbergable;

//
//
    protected $fillable = [
        'body', 'lb_content', 'lb_raw_content', 'title','excerpt','thumbnail'
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function age(): BelongsTo
    {
        return $this->belongsTo(Age::class);
    }

    public function tags(): HasMany
    {
        return $this->hasMany(Tag::class);
    }


}
