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
                "dosen"        => "Anang",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name"       => "Rekayasa Perangkat Lunak",
                "dosen"      => "Aris",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name"       => "Kalkulus",
                "dosen"      => "Habib",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Pengembangan Teknologi Web",
                "dosen" => "Elsen",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Aristektur Organisasi Komputer",
                "dosen" => "Elvianto",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Manajemen Proyek Perangkat Lunak",
                "day" => "Aidil",
                "created_at" => now(),
                "updated_at" => now(),
            ],
        ];

        MataKuliah::insert($matakuliah);
    }
}
