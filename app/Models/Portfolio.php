<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
        'name',
        'nim',
        'birth_date',
        'birth_place',
        'semester',
        'major',
        'campus',
        'hobby',
        'description',
    ];

    protected $casts = [
        'birth_date' => 'date',
    ];
}
