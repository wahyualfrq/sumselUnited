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
        Schema::create('players', function (Blueprint $table) {
            $table->id(); // ID unik untuk setiap pemain
            $table->string('name'); // Nama lengkap pemain
            $table->date('birth_date')->nullable(); // Tanggal lahir pemain (boleh kosong)
            $table->enum('position', ['goalkeeper', 'defender', 'midfielder', 'forward']); // Posisi utama pemain di lapangan
            $table->string('nationality')->nullable(); // Negara asal pemain
            $table->unsignedInteger('jersey_number')->nullable(); // Nomor punggung pemain (opsional)
            $table->boolean('is_active')->default(true); // Status aktif pemain di musim ini (true = masih bermain)
            $table->timestamps(); // Kolom created_at dan updated_at otomatis
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
