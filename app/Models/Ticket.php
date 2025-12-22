<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Ticket extends Model
{
    protected $fillable = [
        'match_name',
        'stadium',
        'match_date',
        'sales_status',
        'price',
        'stock',
        'is_active',
    ];
    public function getStatusAttribute(): string
    {
        // HABIS selalu prioritas utama
        if ((int) $this->stock <= 0) {
            return 'sold_out';
        }

        // selain itu, ikuti pilihan admin
        return $this->sales_status === 'available'
            ? 'available'
            : 'upcoming';
    }



    protected $casts = [
        'match_date' => 'datetime',
        'is_active' => 'boolean',
    ];
}
