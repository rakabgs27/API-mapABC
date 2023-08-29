<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logistik extends Model
{
    use HasFactory;

    protected $table = 'logistiks';

    protected $fillable = [
        'total_beasiswa',
        'total_sembako',
        'total_kaos',
        'total_logistik',
        'id_kecamatan',
    ];

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'id_kecamatan');
    }
}
