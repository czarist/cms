<?php

namespace App\Http\Controllers\Admin\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;

class ApiCategoryController extends Controller
{
    /**
     * Retorna todos os registros de habilidades em formato JSON.
     *
     * @return \Illuminate\Http\JsonResponse string
     */
    public function index()
    {
        $categoryArray = Category::getAllCategoriesAsArray();
        return response()->json($categoryArray);
    }
}
