<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->string('home_team');
            $table->string('away_team');
            $table->dateTime('match_date');
            $table->string('stadium')->nullable();
            $table->enum('status', ['scheduled', 'finished', 'cancelled'])->default('scheduled');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('matches');
    }
};
