<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subjects = [
            [
                'SubjectName' => 'Matematika',
                'Grade' => 'SD'
            ],
            [
                'SubjectName' => 'Matematika',
                'Grade' => 'SMP'
            ],
            [
                'SubjectName' => 'Matematika',
                'Grade' => 'SMA'
            ],
            [
                'SubjectName' => 'Bahasa Indonesia',
                'Grade' => 'SD'
            ],
            [
                'SubjectName' => 'Bahasa Indonesia',
                'Grade' => 'SMP'
            ],
            [
                'SubjectName' => 'Bahasa Indonesia',
                'Grade' => 'SMA'
            ],
            [
                'SubjectName' => 'Sejarah',
                'Grade' => 'SMA'
            ],
            [
                'SubjectName' => 'Biologi',
                'Grade' => 'SMP'
            ],
        ];

        foreach($subjects as $s){
            Subject::create($s);
        }
    }
}
