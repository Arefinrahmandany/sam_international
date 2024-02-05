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
        Schema::create('agents_bds', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cell')->nullable();
            $table->string('email')->nullable();
            $table->string('details')->nullable();
            $table->integer('debit')->nullable();
            $table->integer('credit')->nullable();
            $table->string('address')->nullable();
            $table->boolean('status')->default(true);
            $table->boolean('tresh')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agents_bds');
    }
};
