<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            [
                'TutorID' => 1,
                'SubjectID' => 1,
                'Title' => 'Integral',
                'Price' => 100000,
                'Curriculum' => 'K13',
                'Detail' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse gravida fringilla augue vel consequat. Quisque sodales sapien a libero iaculis.',
                'Poster' => '1.png',
                'Video' => 'Test'
            ], 
            [
                'TutorID' => 1,
                'SubjectID' => 2,
                'Title' => 'Geometri',
                'Price' => 50000,
                'Curriculum' => 'Kurikulum Merdeka',
                'Detail' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse gravida fringilla augue vel consequat. Quisque sodales sapien a libero iaculis.',
                'Poster' => '2.png',
                'Video' => 'Test'
            ]
        ];

        foreach($courses as $c){
            Course::create($c);
        }
    }
}
