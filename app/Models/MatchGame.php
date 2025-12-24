<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Ticket; // ⬅️ WAJIB

class MatchGame extends Model
{
    protected $table = 'matches';

    protected $fillable = [
        'home_team',
        'away_team',
        'match_date',
        'stadium',
        'status',
    ];

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
