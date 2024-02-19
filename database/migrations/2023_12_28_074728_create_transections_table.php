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
        Schema::create('transections', function (Blueprint $table) {
            $table->id();
            $table->string('voucherNo')->unique();
            $table->string('reciveBy')->nullable();
            $table->string('agent')->nullable();
            $table->string('reciveFrom')->nullable();
            $table->string('paid_to')->nullable();
            $table->string('account_group')->nullable();
            $table->string('details')->nullable();
            $table->string('credit')->nullable();
            $table->string('debit')->nullable();
            $table->string('due')->nullable();
            $table->string('paymentSystem')->nullable();
            $table->boolean('status')->default(true);
            $table->boolean('tresh')->default(false);
            $table->string('user_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transections');
    }
};
