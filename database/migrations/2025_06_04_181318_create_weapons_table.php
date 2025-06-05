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
        Schema::create('weapons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('item_id')->constrained()->onDelete('cascade');
            
            // Estadísticas específicas de armas
            $table->unsignedInteger('pa_cost')->default(0);
            $table->unsignedInteger('po_min')->default(0);
            $table->unsignedInteger('po_max')->default(0);
            $table->unsignedInteger('cc_bonus')->default(0);
            $table->unsignedInteger('cc_hits')->default(0);
            $table->unsignedInteger('cc_rate')->default(0);
            $table->unsignedInteger('hits_count')->default(0);
            $table->unsignedInteger('hits_lines')->default(0);
            $table->boolean('one_hand')->nullable();
            $table->boolean('incarnation')->nullable();
            $table->boolean('etheral')->nullable();

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weapons');
    }
};
