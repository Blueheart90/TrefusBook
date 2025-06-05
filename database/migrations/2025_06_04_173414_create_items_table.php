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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('official_id')->unique(); // ID oficial del juego
            $table->string('name');
            $table->text('information')->nullable();
            $table->string('slug')->unique();
            $table->unsignedInteger('level')->default(1);
            $table->unsignedInteger('picture')->nullable();

            // Referencias a otras tablas
            $table
                ->foreignId('category_id')
                ->constrained()
                ->onDelete('cascade');
            $table
                ->foreignId('cloth_id')
                ->nullable()
                ->constrained()
                ->onDelete('set null');

            // Configuraciones del item
            $table->boolean('choose_effect')->default(false);
            $table->boolean('give_boost')->default(false);
            $table->boolean('cannot_fm')->default(false);

            // Datos de apariencia
            $table->string('swf')->nullable();
            $table->string('harness')->nullable();
            $table->string('main_color1')->nullable();
            $table->string('main_color2')->nullable();
            $table->string('main_color3')->nullable();
            $table->string('png_color1')->nullable();
            $table->string('png_color2')->nullable();
            $table->string('png_color3')->nullable();
            $table->string('size')->nullable();
            $table->boolean('cameleon')->default(false);

            $table->timestamps();

            // Índices para mejorar performance
            $table->index(['category_id', 'level']);
            $table->index('cloth_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
