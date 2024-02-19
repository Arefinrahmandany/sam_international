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
        Schema::create('b_m_e_t_s', function (Blueprint $table) {
            $table->id();
            $table->string('passportNumber')->nullable();
            $table->string('rlNumber')->nullable();
            $table->string('debit')->nullable();
            $table->string('credit')->nullable();
            $table->string('due')->nullable();
            $table->boolean('status')->default('true');
            $table->boolean('trash')->default('false');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('b_m_e_t_s');
    }
};
