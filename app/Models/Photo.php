<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'album_id',           // ID album
        'image_path',         // Path gambar
        'caption',            // Keterangan gambar
        'order',              // Urutan tampilan
    ];

    public function album()
    {
        return $this->belongsTo(Album::class);
    }
}
