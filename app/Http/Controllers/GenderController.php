<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gender;

class GenderController extends Controller
{
    public function index()
    {
        $genders = Gender::all();
        return view('genders.index', compact('genders'));
    }

    public function create()
    {
        return view('genders.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50|unique:genders,name'
        ]);

        Gender::create([
            'name' => $request->name
        ]);

        return to_route('genders.index');
    }

    public function show(string $id)
    {
        $gender = Gender::findOrFail($id);
        return view('genders.show', compact('gender'));
    }

    public function edit(string $id)
    {
        $gender = Gender::findOrFail($id);
        return view('genders.edit', compact('gender'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:50|unique:genders,name,' . $id
        ]);
    
        $gender = Gender::findOrFail($id);
        $gender->update([
            'name' => $request->name
        ]);
    
        return to_route('genders.index');
    }

    public function destroy(string $id)
    {
        $gender = Gender::findOrFail($id);
        $gender->delete();
    
        return to_route('genders.index');
    }
}
