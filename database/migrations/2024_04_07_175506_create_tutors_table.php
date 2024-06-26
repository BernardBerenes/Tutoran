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
        Schema::create('tutors', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('Email');
            $table->string('Password');
            $table->char('Gender', 1)->nullable();
            $table->date('DateOfBirth')->nullable();
            $table->string('PhoneNumber', 15)->nullable();
            $table->string('Background')->nullable();
            $table->float('Rating')->nullable();
            $table->string('Image')->default('Default.jpg');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tutors');
    }
};
