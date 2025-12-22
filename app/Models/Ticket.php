<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'match_name',
        'stadium',
        'match_date',
        'price',
        'stock',
        'is_active',
    ];

    protected $casts = [
        'match_date' => 'datetime',
        'is_active' => 'boolean',
    ];
}
