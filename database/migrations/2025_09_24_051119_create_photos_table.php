<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->id(); // ID unik foto
            $table->foreignId('album_id')->constrained()->onDelete('cascade'); // Relasi ke album
            $table->string('image_path'); // Path atau URL gambar
            $table->string('caption')->nullable(); // Keterangan gambar (opsional)
            $table->unsignedInteger('order')->nullable(); // Urutan tampilan (opsional)
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photos');
    }
};
