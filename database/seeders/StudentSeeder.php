<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            ['Name' => 'Siswa 1', 'Email' => 'siswa1', 'Password' => Hash::make('siswa')],
            ['Name' => 'Siswa 2', 'Email' => 'siswa2', 'Password' => 'siswa'],
            ['Name' => 'Dicky Dharma Susanto', 'Email' => 'dicky.susanto@binus.ac.id', 'Password' => 'DickyGanteng'],
            ['Name' => 'Ahmad Fauzi', 'Email' => 'ahmad.fauzi@example.com', 'Password' => 'password123'],
            ['Name' => 'Rina Wijaya', 'Email' => 'rina.wijaya@example.com', 'Password' => 'password123'],
            ['Name' => 'Siti Nurhaliza', 'Email' => 'siti.nurhaliza@example.com', 'Password' => 'password123'],
            ['Name' => 'Budi Santoso', 'Email' => 'budi.santoso@example.com', 'Password' => 'password123'],
            ['Name' => 'Sri Wahyuni', 'Email' => 'sri.wahyuni@example.com', 'Password' => 'password123'],
            ['Name' => 'Andi Saputra', 'Email' => 'andi.saputra@example.com', 'Password' => 'password123'],
            ['Name' => 'Maya Sari', 'Email' => 'maya.sari@example.com', 'Password' => 'password123'],
            ['Name' => 'Agus Setiawan', 'Email' => 'agus.setiawan@example.com', 'Password' => 'password123'],
            ['Name' => 'Fitriani Hasan', 'Email' => 'fitriani.hasan@example.com', 'Password' => 'password123'],
        ]); 
    }
}
