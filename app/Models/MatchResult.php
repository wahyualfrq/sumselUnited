<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MatchResult extends Model
{
    protected $fillable = [
        'ticket_id',
        'home_score',
        'away_score',
        'goal_scorers',
        'referee',
    ];

    protected $casts = [
        'goal_scorers' => 'array',
    ];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }
}
