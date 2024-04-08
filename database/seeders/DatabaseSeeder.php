<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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

        Student::create(['name' => 'B', 'Email' => 'c', 'Password' => 'c']);
        Tutor::create(['name' => 'B', 'Email' => 'd', 'Password' => 'd']);
    }
}
