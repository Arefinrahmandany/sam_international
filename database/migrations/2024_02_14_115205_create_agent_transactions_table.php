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
        Schema::create('agent_transactions', function (Blueprint $table) {
            $table->id();
            $table->string('voucherNo');
            $table->string('reciveBy')->nullable();
            $table->id('agent');
            $table->string('Detail');
            $table->float('debit')->nullable();
            $table->float('credit')->nullable();
            $table->string('paymentSystem')->nullable();
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
        Schema::dropIfExists('agent_transactions');
    }
};
