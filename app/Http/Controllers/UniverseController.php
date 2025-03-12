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
        //
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
