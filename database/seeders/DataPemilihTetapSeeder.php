<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DataPemilihTetap;

class DataPemilihTetapSeeder extends Seeder
{
    public function run(): void
    {
        DataPemilihTetap::create([
            'total_pemilih_tetap' => 2776768,
        ]);
    }
}
