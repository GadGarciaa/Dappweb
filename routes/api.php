<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UniverseAPIController;
use App\Http\Controllers\SuperHeroAPIController;
use App\Http\Controllers\GenderAPIController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/universe', [UniverseAPIController::class, 'index']);
Route::get('/universe', [UniverseAPIController::class, 'index']);
Route::get('/universe/{name}', [UniverseAPIController::class, 'show']);
Route::get('/universe/id/{id}', [UniverseAPIController::class, 'showById']);

Route::get('/superheroe', [SuperHeroAPIController::class, 'index']);
Route::get('/superheroe/{name}', [SuperHeroAPIController::class, 'show']);
Route::get('/superheroe/id/{id}', [SuperHeroAPIController::class, 'showById']); 

Route::get('/gender', [GenderAPIController::class, 'index']);
Route::get('/gender/{name}', [GenderAPIController::class, 'show']);
Route::get('/gender/id/{id}', [GenderAPIController::class, 'showById']);
