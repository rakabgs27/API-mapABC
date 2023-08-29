<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPemilihKecamatan extends Model
{
    use HasFactory;

    protected $table = 'data_pemilih_kecamatans';

    protected $fillable = [
        'total_pemilih_kecamatan',
        'presentase',
        'id_kecamatan',
        'id_total_pemilih_tetap',

    ];

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'id_kecamatan');
    }

    public function totalPemilihTetap()
    {
        return $this->belongsTo(DataPemilihTetap::class, 'id_total_pemilih_tetap');
    }
}
