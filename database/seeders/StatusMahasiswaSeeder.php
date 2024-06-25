<?php

namespace Database\Seeders;

use App\Models\StatusMahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusMahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StatusMahasiswa::create([
            'id_mhs' => 1,
            'id_dsn' => 0,
        ]);
    }
}
