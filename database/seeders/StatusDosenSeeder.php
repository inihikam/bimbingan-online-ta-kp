<?php

namespace Database\Seeders;

use App\Models\StatusDosen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusDosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StatusDosen::create([
            'id_period' => 1,
            'kuota' => 5,
            'ajuan' => 0,
            'diterima' => 0,
            'sisa' => 5,
            'status' => 'TERSEDIA',
        ]);
    }
}
