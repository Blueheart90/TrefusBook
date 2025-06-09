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
        Schema::create('cloth_bonuses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cloth_id')->constrained()->onDelete('cascade');
            $table
                ->foreignId('effect_type_id')
                ->constrained()
                ->onDelete('cascade');
            $table->integer('count');
            $table->string('value');

            // Campos adicionales opcionales
            $table->string('emote')->nullable();
            $table->string('title')->nullable();
            $table->string('spell')->nullable();
            $table->text('spell_description')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cloth_bonuses');
    }
};
