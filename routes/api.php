<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EjemploController;

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
Route::get('ejemplos', [EjemploController::class,'index']);
Route::post('ejemplos', [EjemploController::class,'store']);
Route::get('ejemplos/{ejemplo}', [EjemploController::class,'show']);
Route::put('ejemplos/{ejemplo}', [EjemploController::class,'update']);
Route::delete('ejemplos/{ejemplo}', [EjemploController::class,'destroy']);