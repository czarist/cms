<?php

namespace App\Http\Controllers\Admin\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Project;

class ApiProjectController extends Controller
{
    /**
     * Retorna todos os registros de projetos em formato JSON paginados.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $perPage = $request->input('per_page', 6);
        $query = Project::with('categories');

        if ($request->has('category_id')) {
            $category_id = $request->input('category_id');
            $query->whereHas('categories', function ($query) use ($category_id) {
                $query->where('id', $category_id);
            });
        }

        if ($request->has('project_id')) {
            $project_id = $request->input('project_id');
            $query->where('id', $project_id);
        }

        $projects = $query->paginate($perPage);

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
