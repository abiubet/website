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
                "day"        => "senin",
                "time"       => "18:00:00",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name"       => "Rekayasa Perangkat Lunak",
                "day"        => "senin",
                "time"       => "20:00:00",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name"       => "Kalkulus",
                "day"        => "selasa",
                "time"       => "18:00:00",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Pengembangan Teknologi Web",
                "day" => "selasa",
                "time" => "19:00:00",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Aristektur Organisasi Komputer",
                "day" => "rabu",
                "time" => "20:00:00",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Manajemen Proyek Perangkat Lunak",
                "day" => "rabu",
                "time" => "19:00:00",
                "created_at" => now(),
                "updated_at" => now(),
            ],
        ];

        MataKuliah::insert($matakuliah);
    }
}
