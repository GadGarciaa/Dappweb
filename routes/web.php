<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuperHeroController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\UniverseController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\FileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
   
    Route::resource('superheroes', SuperHeroController::class);

    Route::resource('genders', GenderController::class);

    Route::resource('universes', UniverseController::class);
});

Route::get('/form', function () {
    return view('form');
});

Route::post('/upload', [FileController::class, 'upload'])->name('upload');
Route::post("/download/{path}", [FileController::class, "download"])->where('path', '.*')->name("download");


require __DIR__.'/auth.php';
