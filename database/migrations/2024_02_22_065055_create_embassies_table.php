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
        Schema::create('embassies', function (Blueprint $table) {
            $table->id();
            $table->string('passport');
            $table->string('visa_number')->nullable();
            $table->string('supports')->nullable();
            $table->string('okala')->nullable();
            $table->string('first_Party')->nullable();
            $table->string('licence')->nullable();
            $table->string('qualification')->nullable();
            $table->string('police_clearance')->nullable();
            $table->string('incharge_number')->nullable();
            $table->boolean('status')->default(1);
            $table->boolean('trash')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('embassies');
    }
};
