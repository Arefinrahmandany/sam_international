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
        Schema::create('travel_agencies', function (Blueprint $table) {
            $table->id();
            $table->string('buyer_name')->nullable();
            $table->string('airline')->nullable();
            $table->string('flightFrom')->nullable();
            $table->string('destination')->nullable();
            $table->string('departureDate')->nullable();
            $table->string('returnDate')->nullable();
            $table->string('details')->nullable();
            $table->string('qty')->nullable();
            $table->string('price')->nullable();
            $table->string('total_price')->nullable();
            $table->boolean('status')->default(true);
            $table->boolean('trash')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('travel_agencies');
    }
};
