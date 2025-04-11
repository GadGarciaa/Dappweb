<?php

namespace App\Http\Controllers;

use App\Models\SuperHero;
use Illuminate\Http\Request;

class SuperHeroAPIController extends Controller
{
    public function index()
    {
        $superheroes = SuperHero::with(['gender', 'universe'])->get();
        return response()->json($superheroes);
    }
    public function showById($id)
    {
    $superhero = SuperHero::find($id);
    if (!$superhero) {
        return response()->json(['message' => 'Superhero not found'], 404);
    }
    return response()->json($superhero);
    }
}
