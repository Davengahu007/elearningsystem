<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registered_units extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'unit_id',
        'unit_name',
    ];
}
