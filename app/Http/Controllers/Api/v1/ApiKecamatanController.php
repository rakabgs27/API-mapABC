<?php

namespace App\Http\Controllers\Api\v1;


use App\Models\Kecamatan;
use App\Http\Controllers\Controller;
use App\Http\Resources\KecamatanResource;

class ApiKecamatanController extends Controller
{
    public function index()
    {
        $kecamatans = Kecamatan::all();

        if ($kecamatans->isEmpty()) {
            $response = [
                'status' => 'failed',
                'message' => 'No data available',
                'data' => []
            ];
        } else {
            $response = [
                'status' => 'success',
                'message' => 'Data retrieved successfully',
                'data' => KecamatanResource::collection($kecamatans)
            ];
        }

        return response()->json($response);
    }
}
