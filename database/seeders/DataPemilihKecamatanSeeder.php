<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DataPemilihKecamatan;

class DataPemilihKecamatanSeeder extends Seeder
{
    public function run(): void
    {
        DataPemilihKecamatan::create([
            'total_pemilih_kecamatan' => 1000,
            'presentase' => 20,
            'id_kecamatan' => 1,
            'id_total_pemilih_tetap' => 1,

        ]);
    }
}
