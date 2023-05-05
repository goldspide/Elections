<?php

use App\Http\Controllers\participantController as ControllersParticipantController;
use App\Http\Controllers\REST\bulletinController;
use App\Http\Controllers\REST\ElectionController;
use App\Http\Controllers\REST\ParticipantController;
use App\Http\Controllers\REST\regionController;
use App\Http\Controllers\REST\VoteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::middleware(['cors'])->group(function () {
//     Route::post('/hogehoge', 'Controller@hogehoge');
// });

Route::apiResource('participant',ParticipantController::class);
Route::get('status/{id}',[ParticipantController::class, 'status']);

Route::apiResource('region',regionController::class);
Route::apiResource('Election',ElectionController::class);
Route::apiResource('Vote',VoteController::class);
Route::apiResource('Bulletin',bulletinController::class);
