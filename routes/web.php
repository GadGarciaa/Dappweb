<?php

use Illuminate\Support\Facades\Route;
use App\Models\Universe;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\UniverseController;

Route::get('/', function () {
    echo 'Hello, World!';
    dump(Universe::all());
});
Route::get('/gender',[GenderController::class,'index']);

//Route::get('/universes',[UniverseController::class,'index']);
//Route::get('/universes/create',[UniverseController::class,'create']);

Route::resource('universes',UniverseController::class);