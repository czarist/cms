<?php

namespace App\Http\Controllers\Admin\Api;

use App\Http\Controllers\Controller;
use App\Models\Education;

class ApiEducationController extends Controller
{
    /**
     * Retorna todos os registros de habilidades em formato JSON.
     *
     * @return \Illuminate\Http\JsonResponse string
     */
    public function index()
    {
        $educationArray = Education::getAllEducationsAsArray();
        return response()->json($educationArray);
    }
}
