<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use VanOns\Laraberg\Models\Gutenbergable;

class Post extends Model
{
    use HasFactory;
    use HasFactory;
    use Gutenbergable;
    protected $fillable = [
        'body'
    ];
}
