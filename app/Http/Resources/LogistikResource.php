<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LogistikResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'total_beasiswa' => $this->total_beasiswa,
            'total_sembako' => $this->total_sembako,
            'total_kaos' => $this->total_kaos,
            'total_logistik' => $this->total_logistik,
            'id_kecamatan' => $this->kecamatan->id,
            'nama_kecamatan' => $this->kecamatan->nama_kecamatan,
        ];
    }
}
