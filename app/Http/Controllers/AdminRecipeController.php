<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminRecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::all();
        return view('admin.recipes.index', compact('recipes'));
    }

    public function create()
    {
        return view('admin.recipes.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Recipe::create($validated);

        return redirect()->route('admin.recipes.index');
    }

    public function show(Recipe $recipe)
    {
        return view('admin.recipes.show', compact('recipe'));
    }

    public function edit(Recipe $recipe)
    {
        return view('admin.recipes.edit', compact('recipe'));
    }

    public function update(Request $request, Recipe $recipe)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $recipe->update($validated);

        return redirect()->route('admin.recipes.index');
    }

    public function destroy(Recipe $recipe)
    {
        $recipe->delete();
        return redirect()->route('admin.recipes.index');
    }
}
