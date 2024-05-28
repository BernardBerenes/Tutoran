<?php

namespace Database\Seeders;

use App\Models\Tutor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tutors = [
            [
                'Name' => 'Tutor 1', 
                'Email' => 'tutor1', 
                'Password' => 'tutor', 
                'Background' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis imperdiet nibh sit amet tortor finibus commodo. Aliquam erat volutpat. Nulla.'
            ],
            [
                'Name' => 'Tutor 2', 
                'Email' => 'tutor2', 
                'Password' => 'tutor', 
                'Background' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis imperdiet nibh sit amet tortor finibus commodo. Aliquam erat volutpat. Nulla.'
            ],
            [
                'Name' => 'Tutor 3', 
                'Email' => 'tutor3', 
                'Password' => 'tutor', 
                'Background' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis imperdiet nibh sit amet tortor finibus commodo. Aliquam erat volutpat. Nulla.'
            ],
            [
                'Name' => 'Tutor 4', 
                'Email' => 'tutor4', 
                'Password' => 'tutor', 
                'Background' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis imperdiet nibh sit amet tortor finibus commodo. Aliquam erat volutpat. Nulla.'
            ]
        ];

        foreach($tutors as $t){
            Tutor::create($t);
        }
    }
}
