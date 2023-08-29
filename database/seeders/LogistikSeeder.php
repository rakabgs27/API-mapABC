<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Logistik;
use Illuminate\Support\Facades\DB;

class LogistikSeeder extends Seeder
{
    public function run(): void
    {
        foreach (range(1, 40) as $id_kecamatan) {
            DB::table('logistiks')->insert([
                'total_beasiswa' => rand(1000, 5000),
                'total_sembako' => rand(1000, 5000),
                'total_kaos' => rand(1000, 5000),
                'total_logistik' => rand(1000, 5000),
                'id_kecamatan' => $id_kecamatan,
            ]);
        }
    }
}
