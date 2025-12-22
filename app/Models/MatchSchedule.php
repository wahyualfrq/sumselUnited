<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MatchSchedule extends Model
{
    protected $table = 'match_schedules';

    protected $fillable = [
        'home_team',
        'away_team',
        'match_date',
        'stadium',
        'status',
    ];
}
