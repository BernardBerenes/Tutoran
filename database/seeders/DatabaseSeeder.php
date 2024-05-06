<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Course;
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

        Student::create(['Name' => 'Siswa 1', 'Email' => 'siswa1', 'Password' => 'siswa']);
        Student::create(['Name' => 'Siswa 2', 'Email' => 'siswa2', 'Password' => 'siswa']);
        Tutor::create(['Name' => 'Tutor 1', 'Email' => 'tutor1', 'Password' => 'tutor', 'Background' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis imperdiet nibh sit amet tortor finibus commodo. Aliquam erat volutpat. Nulla.']);
        Tutor::create(['Name' => 'Tutor 2', 'Email' => 'tutor2', 'Password' => 'tutor', 'Background' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis imperdiet nibh sit amet tortor finibus commodo. Aliquam erat volutpat. Nulla.']);
        Tutor::create(['Name' => 'Tutor 3', 'Email' => 'tutor3', 'Password' => 'tutor', 'Background' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis imperdiet nibh sit amet tortor finibus commodo. Aliquam erat volutpat. Nulla.']);
        Tutor::create(['Name' => 'Tutor 4', 'Email' => 'tutor4', 'Password' => 'tutor', 'Background' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis imperdiet nibh sit amet tortor finibus commodo. Aliquam erat volutpat. Nulla.']);
        ForumQuestion::create(['StudentID' => 1, 'Question' => 'Apakah ada proyek atau tugas pr
        aktis yang dapat dilakukan untuk mengaplikasikan konsep yang dipelajari?']);
    }
}
