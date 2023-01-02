<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wapplications extends Model
{
    protected $fillable = [
        'name',
        'email',
        'age',
        'id_no',
        'job',
        'unit_code',
        'description',
        'document',
    ];
    use HasFactory;
}
