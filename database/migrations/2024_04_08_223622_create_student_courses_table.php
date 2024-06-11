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
        Schema::create('student_courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('StudentID');
            $table->unsignedBigInteger('CourseID');
            $table->foreign('StudentID')->references('id')->on('students')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('CourseID')->references('id')->on('courses')->onUpdate('cascade')->onDelete('cascade');
            $table->float('RatingTutor')->nullable();
            $table->float('RatingStudent')->nullable();
            $table->timestamp('VideoConferenceTime')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_courses');
    }
};
