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
        Schema::create('mofas', function (Blueprint $table) {
            $table->id();
            $table->string('passport');
            $table->string('visaNumber')->nullable();
            $table->string('sponser')->nullable();
            $table->string('occupetion')->nullable();
            $table->string('purpose')->nullable();
            $table->boolean('finger')->default(0);
            $table->boolean('training')->default(0);
            $table->boolean('attested')->default(0);
            $table->boolean('medical_report')->default(0);
            $table->boolean('status')->default(1);
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mofas');
    }
};
