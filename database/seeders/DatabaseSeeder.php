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
            'ipk' => 3.89,
            'transkrip' => 'https://www.google.com',
            'telp' => '082243539209',
            'email' => '111202113550@mhs.dinus.ac.id',
        ]);

        // Seed data Dosen
        Dosen::create([
            'nama' => 'ARDYTHA LUTHFIARTA, M.Kom',
            'npp' => '0686.11.2012.460',
            'email' => 'ardytha.luthfiarta@dsn.dinus.ac.id',
            'bidang_kajian' => 'SC',
            'scholar' => 'https://scholar.google.com/citations?user=hJuwBL8AAAAJ&hl=id&oi=ao',
            'telp' => '081325105905',
        ]);

        $this->call([
            PeriodeSeeder::class,
            RoleSeeder::class,
            UserRoles::class,
            KoordinatorSeeder::class,
            KoordinatorRoles::class,
            AdminSeeder::class,
            AdminSeederRoles::class,
            StatusMahasiswaSeeder::class,
            MahasiswaPeriodikSeeder::class,
            DosenPeriodikSeeder::class,
            StatusDosenSeeder::class
        ]);
    }
}
