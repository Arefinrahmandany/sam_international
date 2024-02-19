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
        Schema::create('passports_news', function (Blueprint $table) {
            $table->id();
            $table->string('passport_number')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('sex')->nullable();
            $table->string('age')->nullable();
            $table->string('birthdate')->nullable();
            $table->string('religion')->nullable();
            $table->string('applying_country')->nullable();
            $table->string('agentsBD')->nullable();
            $table->string('incharge_number')->nullable();
            $table->string('first_Party')->nullable();
            $table->string('visa_number')->nullable();
            $table->string('passport_issue_date')->nullable();
            $table->string('supports')->nullable();
            $table->string('okala')->nullable();
            $table->string('agency')->nullable();
            $table->boolean('medical_report')->default(false);
            $table->date('medical_expiryDate')->nullable();
            $table->string('police_clearance')->nullable();
            $table->string('licence')->nullable();
            $table->string('occupation')->nullable();
            $table->string('qualification')->nullable();
            $table->string('nationality')->default('Bangladeshi')->nullable();
            $table->string('visaProcess')->nullable();
            $table->date('visa_issue_date')->nullable();
            $table->string('visa_expiry_date')->nullable();
            $table->string('visa_Process')->nullable();
            $table->boolean('finger')->default(false);
            $table->boolean('training')->default(false);
            $table->boolean('attested')->default(false);
            $table->string('paymentSystem')->nullable();
            $table->integer('amount')->nullable();
            $table->text('photos')->nullable();
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
        Schema::dropIfExists('passports_news');
    }
};
