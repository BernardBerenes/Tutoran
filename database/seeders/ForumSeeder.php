<?php

namespace Database\Seeders;

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
        DB::table('forum_questions')->insert([
            [
                'StudentID' => 1, 
                'Question' => 'Apakah ada proyek atau tugas praktis yang dapat dilakukan untuk mengaplikasikan konsep yang dipelajari?'
            ]
        ]);
    }
}
