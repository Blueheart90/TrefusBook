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
        Schema::create('item_effects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('item_id')->constrained()->onDelete('cascade');
            $table->foreignId('effect_type_id')->constrained()->onDelete('cascade');
            
            // Valores del efecto
            $table->integer('min_value');
            $table->integer('max_value');
            
            // Campos adicionales opcionales
            $table->string('emote')->nullable();
            $table->string('title')->nullable();
            $table->string('spell')->nullable();
            $table->text('spell_description')->nullable();
            
            $table->timestamps();
            
            // Índices
            $table->index(['item_id', 'effect_type_id']);
            $table->unique(['item_id', 'effect_type_id']); // Un item no puede tener el mismo efecto duplicado
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_effects');
    }
};
