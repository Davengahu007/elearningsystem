<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stdapplications extends Model
{
    protected $fillable = [
        'name',
        'email',
        'age',
        'former_school',
        'grade',
        'course',
        'description',
        'document',
    ];
    use HasFactory;
}
