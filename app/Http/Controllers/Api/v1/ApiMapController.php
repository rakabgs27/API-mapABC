<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Kecamatan;
use App\Models\DataPemilihKecamatan;
use App\Models\Logistik;
use App\Http\Controllers\Controller;
use App\Http\Resources\KecamatanResource;
use App\Http\Resources\DataPemilihKecamatanResource;
use App\Http\Resources\LogistikResource;
use Illuminate\Database\QueryException;
use Illuminate\Http\Response;
use Throwable;
/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="Data Pemilih Malang Raya",
 *      description="INAGATA CINTA KAMUEEE",
 * )
 */
class ApiMapController extends Controller
{
    public function getMarkers()
    {
        try {
            $markers = Kecamatan::all();
            $formattedMarkers = KecamatanResource::collection($markers);

            return response()->json([
                'status' => true,
                'message' => 'Data retrieved successfully',
                'data' => $formattedMarkers
            ], Response::HTTP_OK);
        } catch (QueryException $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to retrieve data',
                'error' => $e->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        } catch (Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => 'An error occurred',
                'error' => $e->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

/**
 * @OA\Get(
 *     path="/v1/{id}/popup-data",
 *     tags={"PopUp Detail"},
 *     summary="Get popup data",
 *     description="Untuk request ketika marker di klik",
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         description="ID of the kecamatan",
 *         required=true,
 *         @OA\Schema(
 *             type="integer"
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Successful retrieval",
 *         @OA\JsonContent(
 *             type="object",
 *             @OA\Property(
 *                 property="status",
 *                 type="boolean",
 *                 description="The status of the request"
 *             ),
 *             @OA\Property(
 *                 property="message",
 *                 type="string",
 *                 description="The message of the request"
 *             ),
 *             @OA\Property(
 *                 property="data",
 *                 type="object",
 *                 @OA\Property(
 *                     property="id",
 *                     type="integer"
 *                 ),
 *                 @OA\Property(
 *                     property="id_kecamatan",
 *                     type="integer"
 *                 ),
 *                 @OA\Property(
 *                     property="pemilih",
 *                     type="object",
 *                     @OA\Property(
 *                         property="id",
 *                         type="integer"
 *                     ),
 *                     @OA\Property(
 *                         property="id_kecamatan",
 *                         type="integer"
 *                     ),
 *                     @OA\Property(
 *                         property="nama_kecamatan",
 *                         type="string"
 *                     ),
 *                     @OA\Property(
 *                         property="id_total_pemilih_tetap",
 *                         type="integer"
 *                     ),
 *                     @OA\Property(
 *                         property="total_pemilih_tetap",
 *                         type="integer"
 *                     ),
 *                     @OA\Property(
 *                         property="total_pemilih_kecamatan",
 *                         type="integer"
 *                     ),
 *                     @OA\Property(
 *                         property="presentase",
 *                         type="number"
 *                     )
 *                 ),
 *                 @OA\Property(
 *                     property="logistik",
 *                     type="object",
 *                     @OA\Property(
 *                         property="id",
 *                         type="integer"
 *                     ),
 *                     @OA\Property(
 *                         property="total_beasiswa",
 *                         type="integer"
 *                     ),
 *                     @OA\Property(
 *                         property="total_sembako",
 *                         type="integer"
 *                     ),
 *                     @OA\Property(
 *                         property="total_kaos",
 *                         type="integer"
 *                     ),
 *                     @OA\Property(
 *                         property="total_logistik",
 *                         type="integer"
 *                     ),
 *                     @OA\Property(
 *                         property="id_kecamatan",
 *                         type="integer"
 *                     ),
 *                     @OA\Property(
 *                         property="nama_kecamatan",
 *                         type="string"
 *                     )
 *                 ),
 *                 @OA\Property(
 *                     property="kecamatans",
 *                     type="array",
 *                     @OA\Items(
 *                         type="object",
 *                         @OA\Property(
 *                             property="nama_kecamatan",
 *                             type="string"
 *                         ),
 *                         @OA\Property(
 *                             property="presentase",
 *                             type="number"
 *                         )
 *                     )
 *                 )
 *             )
 *         )
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="Data not found",
 *         @OA\JsonContent(
 *             type="object",
 *             @OA\Property(
 *                 property="status",
 *                 type="boolean",
 *                 description="The status of the request"
 *             ),
 *             @OA\Property(
 *                 property="message",
 *                 type="string",
 *                 description="The message of the request"
 *             )
 *         )
 *     )
 * )
 */

    public function getPopupData($id)
    {
        $dataPemilih = DataPemilihKecamatan::where('id_kecamatan', $id)
            ->with('kecamatan', 'totalPemilihTetap')->first();
        $dataLogistik = Logistik::where('id_kecamatan', $id)
            ->with('kecamatan')->first();
        $dataPemilihPresentase = DataPemilihKecamatan::select(
            'kecamatans.nama_kecamatan',
            'data_pemilih_kecamatans.presentase'
        )
            ->leftJoin('kecamatans', 'data_pemilih_kecamatans.id_kecamatan', '=', 'kecamatans.id')
            ->get();

        if ($dataPemilih && $dataLogistik) {
            $combinedData = [];
            foreach ($dataPemilihPresentase as $dataPemilihPresentaseList) {
                $combinedData[] = [
                    'nama_kecamatan' => $dataPemilihPresentaseList->nama_kecamatan,
                    'presentase' => $dataPemilihPresentaseList->presentase
                ];
            }
            return response()->json([
                'status' => true,
                'message' => 'Data retrieved successfully',
                'data' => [
                    'id' => $dataPemilih->id,
                    'id_kecamatan' => $dataPemilih->id_kecamatan,
                    'pemilih' => new DataPemilihKecamatanResource($dataPemilih),
                    'logistik' => new LogistikResource($dataLogistik),
                    'kecamatans' => $combinedData,
                ]
            ], Response::HTTP_OK);
        } else {
            return response()->json(
                [
                    'status' => false,
                    'message' => 'Data not found'
                ],
                Response::HTTP_NOT_FOUND
            );
        }
    }
}
