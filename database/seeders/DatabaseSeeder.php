<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\ForumQuestion;
use App\Models\Student;
use App\Models\Tutor;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        Student::create(['Name' => 'B', 'Email' => 'c', 'Password' => 'c']);
        Tutor::create(['Name' => 'B', 'Email' => 'd', 'Password' => 'd']);
        ForumQuestion::create(['StudentID' => 1, 'Question' => 'Apakah ada proyek atau tugas praktis yang dapat dilakukan untuk mengaplikasikan konsep yang dipelajari?']);
    }
}
