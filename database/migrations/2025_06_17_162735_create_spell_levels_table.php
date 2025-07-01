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
        Schema::create('spell_levels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('spell_id')->constrained()->onDelete('cascade');
            $table->unsignedInteger('level');
            $table->unsignedInteger('pa_cost');
            $table->string('po')->nullable();
            $table->unsignedInteger('cc')->nullable();
            $table->unsignedInteger('cc_rate')->nullable();
            $table->boolean('ir')->nullable(); // coldDown
            $table->boolean('ldv')->nullable(); // linea de visión
            $table->boolean('ltj')->nullable(); // lanzamiento por jugador cada turno
            $table->boolean('pb')->nullable(); // spell de daño
            $table->boolean('lel')->nullable(); // lanzamiento en linea
            $table->boolean('lt')->nullable(); // lanzamiento por turno

            $table->unique(['spell_id', 'level']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spell_levels');
    }
};
