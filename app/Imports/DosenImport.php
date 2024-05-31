<?php

namespace App\Imports;

use App\Models\Dosen;
use App\Models\User;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class DosenImport implements ToCollection
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        foreach ($collection as $row) {
            try {
                Dosen::create([
                    'nama' => $row[0],
                    'npp' => $row[1],
                    'bidang_kajian' => $row[2],
                    'kuota_mhs_ta' => $row[3],
                    'email' => $row[4],
                    'telp_dosen' => $row[5],
                ]);

                $user = User::create([
                    'email' => $row[4],
                    'password' => bcrypt(explode('@', $row[4])[0]),
                ]);

                $user->assignRole('dosen');
            } catch (\Exception $exception) {
                dd($exception);
            }
        }
    }
}
