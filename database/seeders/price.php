<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\id_premium;

class price extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        id_premium::create([
            'plan_name' => 'Premium 1 Bulan',
            'price' => 49999,
        ]);
        id_premium::create([
            'plan_name' => 'Premium 12 Bulan',
            'price' => 499999,
        ]);
    }
}
