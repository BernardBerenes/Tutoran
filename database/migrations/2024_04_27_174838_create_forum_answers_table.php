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
        Schema::create('forum_answers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('QuestionID');
            $table->unsignedBigInteger('StudentID');
            $table->foreign('QuestionID')->references('id')->on('forum_questions')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('StudentID')->references('id')->on('students')->onUpdate('cascade')->onDelete('cascade');
            $table->longText('Answer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forum_answers');
    }
};
