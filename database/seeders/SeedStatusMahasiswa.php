<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\StatusMahasiswa;

class SeedStatusMahasiswa extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StatusMahasiswa::create([
            'id_dospem' => 1,
            'nim' => 'A11.2021.13550',
        ]);
    }
}
