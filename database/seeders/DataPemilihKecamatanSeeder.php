<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DataPemilihKecamatan;
use Illuminate\Support\Facades\DB;

class DataPemilihKecamatanSeeder extends Seeder
{
    public function run()
    {
        DB::table('data_pemilih_kecamatans')->insert([
            ['id' => 1, 'id_kecamatan' => 1, 'id_total_pemilih_tetap' => '1', 'total_pemilih_kecamatan' => 1000, 'presentase' => 0.5],
            ['id' => 2, 'id_kecamatan' => 2, 'id_total_pemilih_tetap' => '1', 'total_pemilih_kecamatan' => 20000, 'presentase' => 10],
            ['id' => 3, 'id_kecamatan' => 3, 'id_total_pemilih_tetap' => '1', 'total_pemilih_kecamatan' => 12, 'presentase' => 0.006],
            ['id' => 4, 'id_kecamatan' => 4, 'id_total_pemilih_tetap' => '1', 'total_pemilih_kecamatan' => 2266, 'presentase' => 1.133],
            ['id' => 5, 'id_kecamatan' => 5, 'id_total_pemilih_tetap' => '1', 'total_pemilih_kecamatan' => 8967, 'presentase' => 4.4835],
            ['id' => 6, 'id_kecamatan' => 6, 'id_total_pemilih_tetap' => '1', 'total_pemilih_kecamatan' => 2356, 'presentase' => 1.178],
            ['id' => 7, 'id_kecamatan' => 7, 'id_total_pemilih_tetap' => '1', 'total_pemilih_kecamatan' => 9455, 'presentase' => 4.7275],
            ['id' => 8, 'id_kecamatan' => 8, 'id_total_pemilih_tetap' => '1', 'total_pemilih_kecamatan' => 2574, 'presentase' => 1.287],
            ['id' => 9, 'id_kecamatan' => 9, 'id_total_pemilih_tetap' => '1', 'total_pemilih_kecamatan' => 7543, 'presentase' => 3.7715],
            ['id' => 10, 'id_kecamatan' => 10, 'id_total_pemilih_tetap' => '1', 'total_pemilih_kecamatan' => 4713, 'presentase' => 2.3565],
            ['id' => 11, 'id_kecamatan' => 11, 'id_total_pemilih_tetap' => '1', 'total_pemilih_kecamatan' => 8744, 'presentase' => 4.372],
            ['id' => 12, 'id_kecamatan' => 12, 'id_total_pemilih_tetap' => '1', 'total_pemilih_kecamatan' => 5804, 'presentase' => 2.902],
            ['id' => 13, 'id_kecamatan' => 13, 'id_total_pemilih_tetap' => '1', 'total_pemilih_kecamatan' => 5104, 'presentase' => 2.552],
            ['id' => 14, 'id_kecamatan' => 14, 'id_total_pemilih_tetap' => '1', 'total_pemilih_kecamatan' => 7551, 'presentase' => 3.7755],
            ['id' => 15, 'id_kecamatan' => 15, 'id_total_pemilih_tetap' => '1', 'total_pemilih_kecamatan' => 932, 'presentase' => 0.466],
            ['id' => 16, 'id_kecamatan' => 16, 'id_total_pemilih_tetap' => '1', 'total_pemilih_kecamatan' => 8489, 'presentase' => 2.2445],
            ['id' => 17, 'id_kecamatan' => 17, 'id_total_pemilih_tetap' => '1', 'total_pemilih_kecamatan' => 8426, 'presentase' => 1.213],
            ['id' => 18, 'id_kecamatan' => 18, 'id_total_pemilih_tetap' => '1', 'total_pemilih_kecamatan' => 5484, 'presentase' => 2.742],
            ['id' => 19, 'id_kecamatan' => 19, 'id_total_pemilih_tetap' => '1', 'total_pemilih_kecamatan' => 7735, 'presentase' => 3.8675],
            ['id' => 20, 'id_kecamatan' => 20, 'id_total_pemilih_tetap' => '1', 'total_pemilih_kecamatan' => 7750, 'presentase' => 3.875],
            ['id' => 21, 'id_kecamatan' => 21, 'id_total_pemilih_tetap' => '1', 'total_pemilih_kecamatan' => 2064, 'presentase' => 1.032],
            ['id' => 22, 'id_kecamatan' => 22, 'id_total_pemilih_tetap' => '1', 'total_pemilih_kecamatan' => 731, 'presentase' => 0.3655],
            ['id' => 23, 'id_kecamatan' => 23, 'id_total_pemilih_tetap' => '1', 'total_pemilih_kecamatan' => 9538, 'presentase' => 4.769],
            ['id' => 24, 'id_kecamatan' => 24, 'id_total_pemilih_tetap' => '1', 'total_pemilih_kecamatan' => 8070, 'presentase' => 4.035],
            ['id' => 25, 'id_kecamatan' => 25, 'id_total_pemilih_tetap' => '1', 'total_pemilih_kecamatan' => 7821, 'presentase' => 3.9105],
            ['id' => 26, 'id_kecamatan' => 26, 'id_total_pemilih_tetap' => '1', 'total_pemilih_kecamatan' => 6328, 'presentase' => 3.164],
            ['id' => 27, 'id_kecamatan' => 27, 'id_total_pemilih_tetap' => '1', 'total_pemilih_kecamatan' => 2025, 'presentase' => 1.0125],
            ['id' => 28, 'id_kecamatan' => 28, 'id_total_pemilih_tetap' => '1', 'total_pemilih_kecamatan' => 118, 'presentase' => 0.059],
            ['id' => 29, 'id_kecamatan' => 29, 'id_total_pemilih_tetap' => '1', 'total_pemilih_kecamatan' => 9683, 'presentase' => 2.3],
            ['id' => 30, 'id_kecamatan' => 30, 'id_total_pemilih_tetap' => '1', 'total_pemilih_kecamatan' => 1552, 'presentase' => 0.787],
            ['id' => 31, 'id_kecamatan' => 31, 'id_total_pemilih_tetap' => '1', 'total_pemilih_kecamatan' => 3499, 'presentase' => 3.7495],
            ['id' => 32, 'id_kecamatan' => 32, 'id_total_pemilih_tetap' => '1', 'total_pemilih_kecamatan' => 1962, 'presentase' => 0.981],
            ['id' => 33, 'id_kecamatan' => 33, 'id_total_pemilih_tetap' => '1', 'total_pemilih_kecamatan' => 8210, 'presentase' => 3.105],
            ['id' => 34, 'id_kecamatan' => 34, 'id_total_pemilih_tetap' => '1', 'total_pemilih_kecamatan' => 829, 'presentase' => 0.4145],
            ['id' => 35, 'id_kecamatan' => 35, 'id_total_pemilih_tetap' => '1', 'total_pemilih_kecamatan' => 7608, 'presentase' => 3.804],
            ['id' => 36, 'id_kecamatan' => 36, 'id_total_pemilih_tetap' => '1', 'total_pemilih_kecamatan' => 8888, 'presentase' => 4.444],
            ['id' => 37, 'id_kecamatan' => 37, 'id_total_pemilih_tetap' => '1', 'total_pemilih_kecamatan' => 1809, 'presentase' => 1.9045],
            ['id' => 38, 'id_kecamatan' => 38, 'id_total_pemilih_tetap' => '1', 'total_pemilih_kecamatan' => 359, 'presentase' => 0.1795],
            ['id' => 39, 'id_kecamatan' => 39, 'id_total_pemilih_tetap' => '1', 'total_pemilih_kecamatan' => 4800, 'presentase' => 2.131],
            ['id' => 40, 'id_kecamatan' => 40, 'id_total_pemilih_tetap' => '1', 'total_pemilih_kecamatan' => 800, 'presentase' => 0.4],
        ]);
    }
}
