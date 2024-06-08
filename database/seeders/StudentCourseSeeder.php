<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('student_courses')->insert([
            [
                'StudentID' => '1',
                'CourseID' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'StudentID' => '1',
                'CourseID' => '2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'StudentID' => '2',
                'CourseID' => '2',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
