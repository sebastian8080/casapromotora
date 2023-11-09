<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/projects', [ApiController::class, 'getprojects'])->middleware('api-validate');
Route::get('/project/{id}', [ApiController::class, 'getprojectbyid'])->middleware('api-validate');
Route::get('/properties', [ApiController::class, 'getproperties'])->middleware('api-validate');
Route::get('/property/{id}', [ApiController::class, 'getpropertybyid'])->middleware('api-validate');