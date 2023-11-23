<?php

namespace App\Http\Controllers\Admin\Api;

use App\Http\Controllers\Controller;
use App\Models\Job;

class ApiJobController extends Controller
{
    /**
     * Retorna todos os registros de habilidades em formato JSON.
     *
     * @return \Illuminate\Http\JsonResponse string
     */
    public function index()
    {
        $jobArray = Job::getAlljobsAsArray();
        return response()->json($jobArray);
    }
}
