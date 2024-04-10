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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('TutorID');
            $table->foreign('TutorID')->references('id')->on('tutors')->onUpdate('cascade')->onDelete('cascade');
            $table->string('Title');
            $table->integer('Price');
            $table->string('Lesson');
            $table->string('Curriculum');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
