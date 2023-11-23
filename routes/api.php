<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Api\ApiSkillController;
use App\Http\Controllers\Admin\Api\ApiProjectController;
use App\Http\Controllers\Admin\Api\ApiCertificateController;
use App\Http\Controllers\Admin\Api\ApiCategoryController;
use App\Http\Controllers\Admin\Api\ApiJobController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('/admin/skills', [ApiSkillController::class, 'index']);
Route::get('/admin/projects', [ApiProjectController::class, 'index']);
Route::get('/admin/certificates', [ApiCertificateController::class, 'index']);
Route::get('/admin/categories', [ApiCategoryController::class, 'index']);
Route::get('/admin/jobs', [ApiJobController::class, 'index']);
