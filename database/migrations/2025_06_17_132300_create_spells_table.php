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
        Schema::create('spells', function (Blueprint $table) {
            $table->id();
            $table
                ->foreignId('race_id')
                ->nullable()
                ->constrained()
                ->onDelete('cascade');
            $table->boolean('is_variante')->default(false);
            $table->boolean('is_passif')->default(false);
            $table->boolean('is_invoc')->default(false);
            $table->string('name');
            $table->string('picture')->nullable();
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spells');
    }
};
