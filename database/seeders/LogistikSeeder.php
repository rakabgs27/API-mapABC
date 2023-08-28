<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Logistik;

class LogistikSeeder extends Seeder
{
    public function run(): void
    {
        Logistik::create([
            'total_beasiswa' => 1000,
            'total_sembako' => 1000,
            'total_kaos' => 1000,
            'total_logistik' => 1000,
            'id_kecamatan' => 1,
        ]);
    }
}
