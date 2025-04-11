<?php

namespace App\Http\Controllers;

use App\Models\Universe;
use Illuminate\Http\Request;

class UniverseAPIController extends Controller
{
    public function index()
    {
        $universes = Universe::all();
        return response()->json($universes);
    }
    public function showById($id)
    {
        $universe = Universe::find($id);
        if (!$universe) {
            return response()->json(['message' => 'Universe not found'], 404);
        }
        return response()->json($universe);
    }
}
