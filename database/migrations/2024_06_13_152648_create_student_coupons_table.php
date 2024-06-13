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
        Schema::create('student_coupons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('StudentID');
            $table->unsignedBigInteger('CouponID');
            $table->foreign('StudentID')->references('id')->on('students')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('CouponID')->references('id')->on('coupons')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_coupons');
    }
};
