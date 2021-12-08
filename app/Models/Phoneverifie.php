<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phoneverifie extends Model
{
    use HasFactory;
    protected $table = 'phone_verifies';

    protected $fillable = [
        'phone',
        'otp',
    ];
}
