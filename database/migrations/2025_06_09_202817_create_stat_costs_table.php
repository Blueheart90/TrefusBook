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
        Schema::create('stat_costs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('race_id')->constrained()->onDelete('cascade');
            $table
                ->foreignId('stat_type_id')
                ->constrained()
                ->onDelete('cascade');
            $table->integer('start');
            $table->integer('cost_per_point');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stat_costs');
    }
};
