<?php

use App\Http\Controllers\RulesController;
use App\Http\Controllers\TreatmentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/userprofile/{id}', [\App\Http\Controllers\UserController::class,'getUser']) ->name('user.getUser');;

Route::middleware('auth:sanctum')->apiResource('treatments', TreatmentController::class);

Route::middleware('auth:sanctum')->apiResource('treatments.rules', RulesController::class)
    ->except('show')
    ->shallow();
/*
Route::get('/treatments', [TreatmentController::class,'index']);
Route::get('/treatments/{treatment}', [TreatmentController::class,'show'] );
Route::post('/treatments', [TreatmentController::class,'store'])->middleware('auth');
*/
    