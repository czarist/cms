<?php

namespace App\Http\Controllers\Admin\Api;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class ApiJobController extends Controller
{
    /**
     * Retorna todos os registros de habilidades em formato JSON.
     *
     * @return \Illuminate\Http\JsonResponse string
     */
    public function index(Request $request)
    {
        if ($request->has('type')) {
            $type = $request->input('type');
            $jobArray = Job::getAllJobsByTypeAsArray($type);
        } else {
            $jobArray = Job::getAllJobsAsArray();
        }

        return response()->json($jobArray);
    }
}
