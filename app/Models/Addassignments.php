<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Addassignments extends Model
{    
    protected $fillable = [
        'assignment_name',
        'due_date',
        'instruction', 
        'year',
        'unit_code',   
    ];
    use HasFactory;
}
