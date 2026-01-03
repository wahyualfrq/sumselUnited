<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
        'title',              // Judul album
        'description',        // Deskripsi album
    ];

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
}
