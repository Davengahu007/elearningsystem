<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addunits extends Model
{
    protected $primaryKey = 'unit_code';

    protected $fillable = [
        'unit_name',
        'unit_code',
        'course_code',
        
        
    ];

    use HasFactory;
}
