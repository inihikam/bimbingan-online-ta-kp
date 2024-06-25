<?php

namespace Database\Seeders;

use App\Models\DosenPeriodik;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DosenPeriodikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DosenPeriodik::create([
            'id_periode' => 1,
            'id_dsn' => 1,
        ]);
    }
}
