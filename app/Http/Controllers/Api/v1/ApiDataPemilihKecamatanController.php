<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\DataPemilihKecamatanResource;
use Illuminate\Http\Request;
use App\Models\DataPemilihKecamatan;

class ApiDataPemilihKecamatanController extends Controller
{
    public function index()
    {
        $dataPemilihKecamatan = DataPemilihKecamatan::all();

        return response()->json([
            'status' => 'success',
            'message' => 'Data retrieved successfully',
            'data' => DataPemilihKecamatanResource::collection($dataPemilihKecamatan)
        ]);
    }

    public function store(Request $request)
    {
        $dataPemilihKecamatan = DataPemilihKecamatan::create($request->all());

        // Menghitung presentasi berdasarkan rumus: (total_pemilih_kecamatan / id_total_pemilih_tetap) * 100
        $presentase = ($dataPemilihKecamatan->total_pemilih_kecamatan / $dataPemilihKecamatan->id_total_pemilih_tetap) * 100;
        $dataPemilihKecamatan->presentase = $presentase;
        $dataPemilihKecamatan->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Data created successfully',
            'data' => new DataPemilihKecamatanResource($dataPemilihKecamatan)
        ], 201);
    }

}
