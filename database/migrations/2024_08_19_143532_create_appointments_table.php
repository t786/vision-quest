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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained('users')->onDelete('cascade'); 
            $table->foreignId('doctor_id')->constrained('users')->onDelete('cascade');
            $table->string('first_name', 255);
            $table->string('last_name', 255);
            $table->string('gender', 10); // Changed from enum to string
            $table->string('mobile', 15);
            $table->string('email', 255);
            $table->text('address');
            $table->date('date');
            $table->time('from');
            $table->time('to');
            $table->string('doctor')->nullable(); // For consulting doctor
            $table->string('treatment', 255)->nullable();
            $table->string('certificate')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
