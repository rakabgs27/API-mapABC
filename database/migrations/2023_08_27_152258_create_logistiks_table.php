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
        Schema::create('logistiks', function (Blueprint $table) {
            $table->id();
            $table->integer('total_beasiswa');
            $table->integer('total_sembako');
            $table->integer('total_kaos');
            $table->integer('total_logistik');
            $table->unsignedBigInteger('id_kecamatan');

            // Menambahkan foreign key
            $table->foreign('id_kecamatan')->references('id')->on('kecamatans');
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
        Schema::dropIfExists('logistiks');
    }
};
