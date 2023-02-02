<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\DepartmentController;
use \App\Http\Controllers\FileController;

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
Route::get('/departments', [DepartmentController::class, 'index']);
Route::get('/departments/{department}', [DepartmentController::class, 'show']);
Route::post('/departments', [DepartmentController::class, 'store']);
Route::patch('/departments/{department}', [DepartmentController::class, 'update']);
Route::delete('/departments/{department}', [DepartmentController::class, 'destroy']);

Route::get('/files', [FileController::class, 'index']);
Route::get('/files/{file}', [FileController::class, 'show']);
Route::post('/files', [FileController::class, 'store']);
Route::patch('/files/{file}', [FileController::class, 'update']);
Route::delete('/files/{file}', [FileController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
