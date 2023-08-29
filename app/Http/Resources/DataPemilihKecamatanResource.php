<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DataPemilihKecamatanResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'id_kecamatan' => $this->kecamatan->id,
            'nama_kecamatan' => $this->kecamatan->nama_kecamatan,
            'id_total_pemilih_tetap' => $this->totalPemilihTetap->id,
            'total_pemilih_tetap' => $this->totalPemilihTetap->total_pemilih_tetap,
            'total_pemilih_kecamatan' => $this->total_pemilih_kecamatan,
            'presentase' => $this->presentase,
        ];
    }
}
