<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('match_name');
            $table->string('stadium');
            $table->dateTime('match_date');

            // 🔥 STATUS DIATUR ADMIN
            $table->enum('sales_status', ['upcoming', 'available'])
                ->default('upcoming');

            $table->unsignedInteger('price');
            $table->unsignedInteger('stock')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
