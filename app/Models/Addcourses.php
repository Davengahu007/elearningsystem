<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addcourses extends Model
{
    protected $primaryKey = 'course_code';
    
    protected $fillable = [
        'course_name',
        'course_code',
        'school',
        'duration',
        
    ];
    use HasFactory;
}
