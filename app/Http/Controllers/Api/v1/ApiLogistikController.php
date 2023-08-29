<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\LogistikResource;
use Illuminate\Http\Request;
use App\Models\Logistik;

class ApiLogistikController extends Controller
{
    public function index()
    {
        $dataLogistik = Logistik::all();

        return response()->json([
            'status' => 'success',
            'message' => 'Data retrieved successfully',
            'data' => LogistikResource::collection($dataLogistik)
        ]);
    }

}
