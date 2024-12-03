<?php

namespace App\Http\Controllers;

use App\Models\Technology;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminTechnologyController extends Controller
{
    public function index()
    {
        $technologies = Technology::all();
        return view('admin.technologies.index', compact('technologies'));
    }

    public function create()
    {
        return view('admin.technologies.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Technology::create($validated);

        return redirect()->route('admin.technologies.index');
    }

    public function show(Technology $technology)
    {
        return view('admin.technologies.show', compact('technology'));
    }

    public function edit(Technology $technology)
    {
        return view('admin.technologies.edit', compact('technology'));
    }

    public function update(Request $request, Technology $technology)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $technology->update($validated);

        return redirect()->route('admin.technologies.index');
    }

    public function destroy(Technology $technology)
    {
        $technology->delete();
        return redirect()->route('admin.technologies.index');
    }
}
