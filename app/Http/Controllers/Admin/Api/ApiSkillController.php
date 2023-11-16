<?php

namespace App\Http\Controllers\Admin\Api;

use App\Http\Controllers\Controller;
use App\Models\Skill;

class ApiSkillController extends Controller
{
    /**
     * Retorna todos os registros de habilidades em formato JSON.
     *
     * @return \Illuminate\Http\JsonResponse string
     */
    public function index()
    {
        $skillsArray = Skill::getAllSkillsAsArray();
        return response()->json($skillsArray);
    }
}
