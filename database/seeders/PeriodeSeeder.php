<?php

namespace Database\Seeders;

use App\Models\Periode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeriodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Periode::create([
            'tahun_ajaran' => '2023_01',
            'status' => true,
        ]);
        Periode::create([
            'tahun_ajaran' => '2023_02',
            'status' => false,
        ]);
    }
}
