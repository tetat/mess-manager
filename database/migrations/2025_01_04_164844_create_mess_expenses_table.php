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
        Schema::create('mess_expenses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('year_id')->constrained()->cascadeOnDelete();
            $table->foreignId('month_id')->constrained()->cascadeOnDelete();
            $table->integer('house_rent');
            $table->integer('electricity_bill');
            $table->integer('gas_bill');
            $table->integer('internet_bill');
            $table->integer('water_bill')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mess_expenses');
    }
};
