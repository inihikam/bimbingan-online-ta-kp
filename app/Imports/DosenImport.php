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
        // dd($collection);
        foreach ($collection as $row) {
            try {
                Dosen::create([
                    'nama' => $row[0],
                    'npp' => $row[1],
                    'bidang_kajian' => $row[2],
                    'email' => $row[3],
                    'telp' => $row[4],
                ]);

                $user = User::create([
                    'email' => $row[3],
                    'password' => bcrypt(explode('@', $row[3])[0]),
                ]);

                $user->assignRole('dosen');
            } catch (\Exception $exception) {
                dd($exception);
            }
        }
    }
}
