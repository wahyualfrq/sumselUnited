<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'match_id',
        'category',
        'price',
        'stock',
        'sales_status',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function match()
    {
        return $this->belongsTo(MatchModel::class, 'match_id');
    }

    /**
     * Status FINAL untuk UI
     */
    public function getStatusAttribute()
    {
        // PRIORITAS 1: tidak aktif
        if (!$this->is_active) {
            return 'inactive';
        }

        // PRIORITAS 2: stok habis
        if ($this->stock <= 0) {
            return 'sold_out';
        }

        // PRIORITAS 3: pilihan admin
        return $this->sales_status; // available | upcoming
    }
}
