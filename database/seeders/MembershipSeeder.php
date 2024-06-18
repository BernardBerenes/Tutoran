<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MembershipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('memberships')->insert([
            [
                'MembershipName' => 'Membership Indonesia Pintar 1',
                'Description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem ab, sunt repellat eligendi doloribus quis, consectetur porro aliquam soluta minima? Consequuntur labore eligendi ratione eius debitis molestiae ipsam nemo?',
                'Discount' => 10,
                'Price' => 500000,
                'Poster' => '1.jpg'
            ],
            [
                'MembershipName' => 'Membership Indonesia Pintar 2',
                'Description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem ab, sunt repellat eligendi doloribus quis, consectetur porro aliquam soluta minima? Consequuntur labore eligendi ratione eius debitis molestiae ipsam nemo?',
                'Discount' => 20000,
                'Price' => 500000,
                'Poster' => '2.jpg'
            ]
        ]);
    }
}
