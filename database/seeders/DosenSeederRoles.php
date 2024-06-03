<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DosenSeederRoles extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::find(36);
        $user->assignRole('dosen');
    }
}
