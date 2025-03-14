<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuperHero;
use App\Models\Universe;
use App\Models\Gender;

class SuperHeroController extends Controller
{

    public function index()
    {
        $superheroes = SuperHero::all();
        return view('superheroes.index', compact('superheroes'));
    }

    public function create()
    {
        $genders = Gender::select('id', 'name')->get();
        $universes = Universe::select('id', 'name')->get();
        return view('superheroes.create', compact('genders', 'universes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'gender_id' => 'required|exists:genders,id',    
            'name' => 'required|string|max:255',
            'real_name' => 'required|string|max:255',
            'universe_id' => 'required|exists:universes,id',
            'picture' => 'nullable|url'
        ]);

        SuperHero::create([
            'gender_id' => $request->gender_id,
            'real_name' => $request->real_name,
            'name' => $request->name,
            'universe_id' => $request->universe_id,
            'picture' => $request->picture
        ]);
        
        return to_route('superheroes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $superhero = SuperHero::find($id);
        return view('superheroes.show', compact('superhero'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
