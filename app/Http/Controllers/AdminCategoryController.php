<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminCategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|max:2048',
            // 'header_image' => 'required|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imageName = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('images/categories', $imageName, 'public');
            $validated['image'] = '/storage/' . $path;
        }

        if ($request->hasFile('header_image')) {
            $headerImageName = $request->file('header_image')->getClientOriginalName();
            $path = $request->file('header_image')->storeAs('images/categories', $headerImageName, 'public');
            $validated['header_image'] = '/storage/' . $path;
        }

        Category::create($validated);

        return redirect()->route('admin.categories.index');
    }

    public function show(Category $category)
    {
        return view('admin.categories.show', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048',
            // 'header_image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($category->image) {
                Storage::disk('public')->delete(str_replace('/storage/', '', $category->image));
            }

            $imageName = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('images/categories', $imageName, 'public');
            $validated['image'] = '/storage/' . $path;
        } elseif ($request->input('delete_image') === '1') {
            // Delete the old image if the delete_image checkbox is checked
            if ($category->image) {
                Storage::disk('public')->delete(str_replace('/storage/', '', $category->image));
                $validated['image'] = null;
            }
        }
        // if ($request->hasFile('header_image')) {
        //     // Delete the old header image if it exists
        //     if ($category->header_image) {
        //         Storage::disk('public')->delete(str_replace('/storage/', '', $category->header_image));
        //     }

        //     $headerImageName = $request->file('header_image')->getClientOriginalName();
        //     $path = $request->file('header_image')->storeAs('images/categories', $headerImageName, 'public');
        //     $validated['header_image'] = '/storage/' . $path;
        // } elseif ($request->input('delete_header_image') === '1') {
        //     // Delete the old header image if the delete_header_image checkbox is checked
        //     if ($category->header_image) {
        //         Storage::disk('public')->delete(str_replace('/storage/', '', $category->header_image));
        //         $validated['header_image'] = null;
        //     }
        // }

        $category->update($validated);

        return redirect()->route('admin.categories.index');
    }

    public function destroy(Category $category)
    {
        // Delete the images if they exist
        if ($category->image) {
            Storage::disk('public')->delete(str_replace('/storage/', '', $category->image));
        }
        if ($category->header_image) {
            Storage::disk('public')->delete(str_replace('/storage/', '', $category->header_image));
        }

        $category->delete();
        return redirect()->route('admin.categories.index');
    }
}
