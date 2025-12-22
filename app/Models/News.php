<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'title',           // Judul berita
        'content',         // Isi berita
        'published_at',    // Tanggal publikasi
        'author',          // Penulis
        'category',        // Kategori berita
        'is_visible',      // Status tampil
    ];
}
