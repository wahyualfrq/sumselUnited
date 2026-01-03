<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    protected $fillable = [
        'name',
        'city',
        'stadium',
        'logo',
        'is_active',
    ];
}