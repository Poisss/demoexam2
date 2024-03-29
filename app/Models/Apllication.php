<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apllication extends Model
{
    use HasFactory;

    protected $fillable = [
        'number_car',
        'description',
        'user_id',
        'status',
    ];
}
