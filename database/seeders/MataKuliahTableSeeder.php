<?php

namespace Database\Seeders;

use App\Models\MataKuliah;
use Illuminate\Database\Seeder;

class MataKuliahTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $matakuliah = [
            [
                "name"       => "Interaksi Manusia Komputer",
                "dosen"        => "Anang Pramono, S.Kom, M.M",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name"       => "Rekayasa Perangkat Lunak",
                "dosen"      => "Aris Sudaryanto, S.St, MT",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name"       => "Kalkulus",
                "dosen"      => "Ahmad Habib, S.Kom, M.M ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Pengembangan Teknologi Web",
                "dosen" => "Elsen Ronando, S.Si., M.Si., M.Sc",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Aristektur Organisasi Komputer",
                "dosen" => "Elvianto Dwi Hartono, ST, M.Kom, M.M",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Manajemen Proyek Perangkat Lunak",
                "day" => "Aidil Primasetya Armin, S.ST, MT.",
                "created_at" => now(),
                "updated_at" => now(),
            ],
        ];

        MataKuliah::insert($matakuliah);
    }
}
