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
        Schema::create('passports', function (Blueprint $table) {
            $table->id();
            $table->string('passport');
            $table->string('name');
            $table->string('email');
            $table->string('passport_issue_date');
            $table->string('passport_expire_date');
            $table->string('father');
            $table->string('mother');
            $table->string('service');
            $table->string('agentsBD');
            $table->decimal('amount',0,10);
            $table->string('applying_country');
            $table->string('address');
            $table->string('gender');
            $table->string('religion');
            $table->string('cell');
            $table->date('dob');
            $table->string('age');
            $table->text('photos');
            $table->string('user_id');
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
        Schema::dropIfExists('passports');
    }
};
