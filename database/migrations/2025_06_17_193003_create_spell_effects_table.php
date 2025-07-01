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
        Schema::create('spell_effects', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->foreignId('spell_id')->constrained()->onDelete('cascade');
            $table
                ->foreignId('spell_level_id')
                ->constrained()
                ->onDelete('cascade');
            $table->string('title')->nullable();
            $table
                ->foreignId('effect_type_id')
                ->constrained()
                ->onDelete('cascade');
            $table->unsignedInteger('min');
            $table->unsignedInteger('max');
            $table->boolean('cc');
            $table->unsignedInteger('duration');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spell_effects');
    }
};
