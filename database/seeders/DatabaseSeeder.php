<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            KecamatanSeeder::class,
            DataPemilihTetapSeeder::class,
            LogistikSeeder::class,
            DataPemilihKecamatanSeeder::class,
        ]);
    }
}
