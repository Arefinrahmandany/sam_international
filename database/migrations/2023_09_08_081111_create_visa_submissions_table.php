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
        Schema::create('visa_submissions', function (Blueprint $table) {
            $table->id();
            $table->string('passport_number')->unique();
            $table->string('applyingcountry');
            $table->string('agency');
            $table->date('application_date');
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
        Schema::dropIfExists('visa_submissions');
    }
};
