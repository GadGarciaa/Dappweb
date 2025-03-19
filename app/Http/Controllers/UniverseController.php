<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Universe;

class UniverseController extends Controller
{
    public function index()
    {
        $universes = Universe::all();
        return view('universes.index', compact('universes'));

    }

    public function create()
    {
        return view('universes.create');
    }

    public function store(Request $request)
    {
        Universe::create([
            'name' => $request->name
        ]);

        return to_route('universes.index');
    }

    public function show(string $id)
    {
        $universe = Universe::findOrFail($id);
        return view('universes.show', compact('universe'));
    }

    public function edit(string $id)
    {
        $universe = Universe::findOrFail($id);
        return view('universes.edit', compact('universe'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:50|unique:universes,name,' . $id
        ]);
    
        $universe = Universe::findOrFail($id);
        $universe->update([
            'name' => $request->name
        ]);
    
        return to_route('universes.index');
    }

    public function destroy(string $id)
    {
        $universe = Universe::findOrFail($id);
        $universe->delete();
    
        return to_route('universes.index');
    }
}
