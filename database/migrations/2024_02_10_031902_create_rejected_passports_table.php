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
        Schema::create('rejected_passports', function (Blueprint $table) {
            $table->id();
            $table->string('passportNumber');
            $table->string('agentsBD');
            $table->string('amount');
            $table->string('rlNumber');
            $table->date('bmetSubmitionDate');
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
        Schema::dropIfExists('rejected_passports');
    }
};
