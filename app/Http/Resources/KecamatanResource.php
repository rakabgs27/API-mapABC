<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class KecamatanResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nama_kecamatan' => $this->nama_kecamatan,
            'longitude' => $this->longitude,
            'latitude' => $this->latitude,
        ];
    }
}
