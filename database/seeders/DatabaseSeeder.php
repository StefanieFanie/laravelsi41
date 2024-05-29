<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Prodi;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Prodi::create(
            [
                'nama' => "Sistem Informasi"
            ]
        );
        Prodi::create(
            [
                'nama' => "Informatika"
            ]
        );
        Prodi::create(
            [
                'nama' => "Manajemen Informatika"
            ]
        );
    }
}
