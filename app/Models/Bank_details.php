<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank_details extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'card_number',
        'expiry_date',
        'cvv',
    ];
}
