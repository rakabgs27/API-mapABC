<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPemilihTetap extends Model
{
    use HasFactory;

    protected $table = 'data_pemilih_tetaps';

    protected $fillable = [
        'total_pemilih_tetap',
    ];
}
