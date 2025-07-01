<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('builds', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Usuario que creó la build
            $table->foreignId('race_id')->constrained()->onDelete('cascade'); // Raza de la build
            $table
                ->foreignId('weapon_id')
                ->nullable()
                ->constrained()
                ->onDelete('set null'); // Arma equipada
            $table->integer('level')->default(1); // Nivel de la build
            $table->boolean('is_public')->default(true); // Si es pública o privada
            $table->integer('views')->default(0); // Número de visualizaciones
            $table->integer('likes')->default(0); // Número de likes
            $table->timestamps();

            // Índices para optimización
            $table->index(['user_id', 'is_public']);
            $table->index(['race_id']);
            $table->index(['created_at']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('builds');
    }
};
