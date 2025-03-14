<?php

use Illuminate\Support\Facades\Route;
use App\Models\Universe;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\UniverseController;
use App\Http\Controllers\SuperHeroController;

Route::get('/', function () {
    echo 'Hello, World!';
    dump(Universe::all());
});

Route::resource('universes', UniverseController::class);
Route::resource('superheroes', SuperHeroController::class);
Route::resource('genders', GenderController::class);