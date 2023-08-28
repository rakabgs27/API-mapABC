<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pemilih_kecamatans', function (Blueprint $table) {
            $table->id();
            $table->integer('total_pemilih_kecamatan');
            $table->double('presentase');
            $table->unsignedBigInteger('id_kecamatan');
            $table->unsignedBigInteger('id_total_pemilih_tetap');

             // Menambahkan foreign key
             $table->foreign('id_kecamatan')->references('id')->on('kecamatans');
             $table->foreign('id_total_pemilih_tetap')->references('id')->on('data_pemilih_tetaps');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_pemilih_kecamatans');
    }
};
