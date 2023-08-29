<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\ApiKecamatanController;
use App\Http\Controllers\Api\v1\ApiDataPemilihKecamatanController;
use App\Http\Controllers\Api\v1\ApiLogistikController;
use App\Http\Controllers\Api\v1\ApiMapController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('v1/kecamatan', ApiKecamatanController::class);
Route::apiResource('v1/data-pemilih-kecamatan', ApiDataPemilihKecamatanController::class);
Route::apiResource('v1/logistik', ApiLogistikController::class);
Route::get('v1/markers', [ApiMapController::class, 'getMarkers']);
Route::get('v1/{id}/popup-data', [ApiMapController::class, 'getPopupData']);

