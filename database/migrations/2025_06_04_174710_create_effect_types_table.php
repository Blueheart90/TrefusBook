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
        Schema::create('effect_types', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->string('value')->unique(); // vi, in, ag, sa, cc, po, dmg, so, pp, rnp, rn
            $table->string('display_name'); // Vitalidad, Inteligencia, Agilidad, etc.
            $table->string('description')->nullable();
            $table->char('type', 1); // E (equipment), etc.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('effect_types');
    }
};
