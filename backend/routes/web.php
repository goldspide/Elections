<?php

use App\Http\Controllers\region;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/region',[App\Http\Controllers\RegionController::class,'region'])->name('region');
Route::post('/region',[App\Http\Controllers\RegionController:: class,'regions'])->name('region_submit');
Route::get('/region_liste',[App\Http\Controllers\RegionController:: class,'create']);
Route::get('/region_delete/{id}',[App\Http\Controllers\RegionController:: class,'destroy']);
Route::get('/form_update_region/{id}',[App\Http\Controllers\RegionController:: class,'edite']);
Route::post('/form_update_region/region_update',[App\Http\Controllers\RegionController:: class,'updates']);


Route::get('/participant', function(){
    return view('participant');
});

Route::get('/participant',[App\Http\Controllers\participantController::class,'participant']);
Route::post('/participant_inscrit',[App\Http\Controllers\participantController::class,'store']);
Route::get('/participant_liste',[App\Http\Controllers\participantController::class,'liste']);
Route::get('/participant_delete/{id}',[App\Http\Controllers\participantController::class,'delete']);
Route::get('/participant_edite/{id}',[App\Http\Controllers\participantController::class,'edite']);
Route::post('/participant_edite',[App\Http\Controllers\participantController::class,'updates']);





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
