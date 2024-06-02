<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\Pengajuan;
use App\Models\LogbookBimbingan;
use App\Models\User;
use App\Models\StatusMahasiswa;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // Seed data User
        User::create([
            'email' => '111202113550@mhs.dinus.ac.id',
            'password' => bcrypt('123456'),
        ]);

        User::create([
            'email' => 'ardytha.luthfiarta@dsn.dinus.ac.id',
            'password' => bcrypt('123456'),
        ]);

        // Seed data Mahasiswa
        Mahasiswa::create([
            'nim' => 'A11.2021.13550',
            'nama' => 'Muhammad Maulana Hikam',
            'ipk' => 3.84,
            'transkrip_nilai' => 'https://www.google.com',
            'telp_mhs' => '082243539209',
            'email' => '111202113550@mhs.dinus.ac.id',
            'dosen_wali' => 'EKO HARI RACHMAWANTO, M.Kom',
        ]);

        // Seed data Dosen
        Dosen::create([
            'nama' => 'ARDYTHA LUTHFIARTA, M.Kom',
            'npp' => '0686.11.2012.460',
            'bidang_kajian' => 'SC',
            'kuota_mhs_ta' => 3,
            'jml_ajuan' => 0,
            'acc_ajuan' => 0,
            'status_dospem' => 'AVAILABLE',
            'email' => 'ardytha.luthfiarta@dsn.dinus.ac.id',
            'telp_dosen' => '081325105905',
        ]);

        Dosen::create([
            'nama' => 'ADHITYA NUGRAHA, S.Kom, M.CS',
            'npp' => '0686.11.2012.444',
            'bidang_kajian' => 'RPLD',
            'kuota_mhs_ta' => 2,
            'jml_ajuan' => 1,
            'acc_ajuan' => 0,
            'status_dospem' => 'AVAILABLE',
            'email' => 'adhitya@dsn.dinus.ac.id',
            'telp_dosen' => '085640577111',
        ]);
    }
}
