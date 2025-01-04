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
        Schema::create('months', function (Blueprint $table) {
            $table->id();
            $table->foreignId('year_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->integer('days');
            $table->decimal('meal_rate', 5, 2)->default(0);
            $table->integer('meal_count')->default(0);
            $table->decimal('total_cost', 8, 2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('months');
    }
};
