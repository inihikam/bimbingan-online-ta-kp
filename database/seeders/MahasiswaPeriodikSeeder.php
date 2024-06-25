<?php

namespace Database\Seeders;

use App\Models\MahasiswaPeriodik;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaPeriodikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MahasiswaPeriodik::create([
            'id_periode' => 1,
            'id_mhs' => 1,
        ]);
    }
}
