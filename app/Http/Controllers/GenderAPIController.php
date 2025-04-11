<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use Illuminate\Http\Request;

class GenderAPIController extends Controller
{

    public function index()
    {
        $genders = Gender::all();
        return response()->json($genders);
    }

    public function show($name)
    {
        $gender = Gender::with('superheroes')->findOrFail($name);
        return response()->json($gender);
    }
    public function showById($id)
    {
    $gender = Gender::find($id);
    if (!$gender) {
        return response()->json(['message' => 'Gender not found'], 404);
    }
    return response()->json($gender);
    }
}
