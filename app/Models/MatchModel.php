<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MatchModel extends Model
{
    use HasFactory;

    protected $table = 'matches';

    protected $fillable = [
        'home_team',
        'away_team',
        'match_date',
        'status'
    ];

    protected $casts = [
        'match_date' => 'datetime',

    ];

    // RELASI
    public function tickets()
    {
        return $this->hasMany(Ticket::class, 'match_id');
    }

    public function result()
    {
        return $this->hasOne(MatchResult::class, 'match_id');
    }

    // SCOPE
    public function scopeUpcoming($query)
    {
        return $query
            ->where('status', 'scheduled')
            ->where('match_date', '>=', now())
            ->orderBy('match_date', 'asc');
    }


    public function getIsTicketAvailableAttribute()
    {
        return $this->tickets()
            ->where('status', 'available')
            ->exists();
    }
}
