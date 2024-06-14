<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('coupons')->insert([
            [
                'CouponName' => 'DICKYGANTENG',
                'MinimumSpend' => 50000,
                'Discount' => 10,
                'EndDate' => now()
            ],
            [
                'CouponName' => 'DICKYJELEK',
                'MinimumSpend' =>null,
                'Discount' => 10000,
                'EndDate' => now()
            ]
        ]);
    }
}
