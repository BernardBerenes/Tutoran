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
        Schema::create('forum_questions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('StudentID');
            $table->foreign('StudentID')->references('id')->on('students')->onUpdate('cascade')->onDelete('cascade');
            $table->string('Question');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forum_questions');
    }
};
