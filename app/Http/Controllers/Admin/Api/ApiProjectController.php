<?php

namespace App\Http\Controllers\Admin\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ApiProjectController extends Controller
{
    /**
     * Retorna todos os registros de habilidades em formato JSON paginados.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $perPage = $request->input('per_page', 6);
        $projects = Project::with('categories')->paginate($perPage);
        $responseData = [
            'total' => $projects->total(),
            'per_page' => $projects->perPage(),
            'current_page' => $projects->currentPage(),
            'last_page' => $projects->lastPage(),
            'data' => $projects->items(),
        ];

        return response()->json($responseData);
    }
}
