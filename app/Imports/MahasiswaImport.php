<?php

namespace App\Imports;

use App\Models\Mahasiswa;
use App\Models\StatusMahasiswa;
use App\Models\User;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class MahasiswaImport implements ToCollection
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        // dd($collection);
        foreach ($collection as $row) {
            try {
                $mhs = Mahasiswa::create([
                    'nama' => $row[0],
                    'nim' => $row[1],
                    'email' => $row[2],
                ]);

                StatusMahasiswa::create([
                    'id_mhs' => $mhs->id,
                ]);

                $user = User::create([
                    'email' => $row[2],
                    'password' => bcrypt(str_replace(['A', '.'], ['1', ''], $row[1])),
                ]);

                $user->assignRole('mahasiswa');
            } catch (\Exception $exception) {
                dd($exception);
            }
        }
    }
}
