<?php

namespace App\Http\Controllers\Admin\Api;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Illuminate\Http\Request;

class ApiCertificateController extends Controller
{
    /**
     * Retorna todos os registros de habilidades em formato JSON paginados.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $perPage = $request->input('per_page', 6); 
        $certificates = Certificate::with('categories')->paginate($perPage);

        $responseData = [
            'total' => $certificates->total(),
            'per_page' => $certificates->perPage(),
            'current_page' => $certificates->currentPage(),
            'last_page' => $certificates->lastPage(),
            'data' => $certificates->items(),
        ];

        return response()->json($responseData);
    }
}
