<?php

namespace Database\Seeders;

use App\Models\ForumQuestion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ForumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
            [
                'StudentID' => 1, 
                'Question' => 'Apakah ada proyek atau tugas praktis yang dapat dilakukan untuk mengaplikasikan konsep yang dipelajari?'
            ]
        ];

        foreach($questions as $q){
            ForumQuestion::create($q);
        }
    }
}
