<?php

namespace App\Models;

use Database\Factories\BlogPostFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{

    protected $fillable = [
        'title',
        'body',
        'user_id'
        ];

        use HasFactory;
    
}
