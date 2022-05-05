<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use VanOns\Laraberg\Models\Gutenbergable;

class Test extends Model
{
    use HasFactory;
    use Gutenbergable;
    protected $fillable = [
        'body'
    ];
}
