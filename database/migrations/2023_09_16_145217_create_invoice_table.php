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
        Schema::create('invoice', function (Blueprint $table) {
            $table->id();
            $table->integer('invoiceNumber')->unique();
            $table->string('category')->nullable();
            $table->integer('refNumber')->nullable();
            $table->string('receiveFrom');
            $table->integer('amount');
            $table->string('forPayment');
            $table->string('receiveby');
            $table->string('paymentSystem');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice');
    }
};
