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
        Schema::create('build_item', function (Blueprint $table) {
            $table->id();
            $table->foreignId('build_id')->constrained()->onDelete('cascade');
            $table->foreignId('item_id')->constrained()->onDelete('cascade');
            $table
                ->foreignId('category_id')
                ->constrained()
                ->onDelete('cascade');
            $table->integer('slot_position')->default(1); // Para items que pueden tener múltiples slots (anillos, dofus)
            $table->timestamps();

            // Constraint único para evitar duplicados en la misma posición
            $table->unique(['build_id', 'category_id', 'slot_position']);
            $table->index(['build_id']);
            $table->index(['item_id']);
            $table->index(['category_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('build_item');
    }
};
