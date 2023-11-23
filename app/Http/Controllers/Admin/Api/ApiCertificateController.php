<?php

namespace App\Http\Controllers\Admin\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Certificate;

class ApiCertificateController extends Controller
{
    /**
     * Retorna todos os registros de habilidades em formato JSON paginados.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $perPage = $request->input('per_page', 6);
        $query = Certificate::with('categories');

        if ($request->has('category_id')) {
            $category_id = $request->input('category_id');
            $query->whereHas('categories', function ($query) use ($category_id) {
                $query->where('id', $category_id);
            });
        }

        if ($request->has('certificate_id')) {
            $certificate_id = $request->input('certificate_id');
            $query->where('id', $certificate_id);
        }

        $certificates = $query->paginate($perPage);

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
