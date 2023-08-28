<?php

namespace App\Http\Controllers\Api\v1;


use App\Models\Kecamatan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
            // Menghapus kolom "created_at" dan "updated_at" dari setiap objek Kecamatan
            $cleanedKecamatanData = $kecamatans->map(function ($kecamatan) {
                return collect($kecamatan)->except(['created_at','updated_at']);
            });

            $response = [
                'status' => 'success',
                'message' => 'Data retrieved successfully',
                'data' => $cleanedKecamatanData
            ];
        }

        return response()->json($response);
    }
}
