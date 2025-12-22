<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [
        'name',               // Nama pemain
        'birth_date',         // Tanggal lahir
        'position',           // Posisi
        'nationality',        // Kewarganegaraan
        'jersey_number',      // Nomor punggung
        'club_id',            // ID klub
        'is_active',          // Status aktif
    ];
}
