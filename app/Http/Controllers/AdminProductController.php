<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Technology;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class AdminProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        $technologies = Technology::all();
        $recipes = Recipe::all();
        return view('admin.products.create', compact('categories', 'technologies', 'recipes'));
    }

    public function store(Request $request)
    {
        Log::info('Store method called');
        $validated = $request->validate([
            'ref' => 'required|string|max:50',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|max:4048',
            'weight' => 'required|numeric',
            'packaging' => 'required|numeric',
            'technology_id' => 'required|exists:technologies,id',
            'recipe_id' => 'required|exists:recipes,id',
        ]);
        Log::info('Validation passed');
        if ($request->hasFile('image')) {
            $imageName = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('images/products', $imageName, 'public');
            $validated['image'] = '/storage/' . $path;
        }
        Log::info('Creating product');
        Product::create($validated);
        Log::info('Product created successfully');
        return redirect()->route('admin.products.index');
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        $technologies = Technology::all();
        $recipes = Recipe::all();
        return view('admin.products.edit', compact('product', 'categories', 'technologies', 'recipes'));
    }

    public function update(Request $request, Product $product)
    {
        Log::info('Update method called for product ID: ' . $product->id);

        $validated = $request->validate([
            'ref' => 'required|string|max:50',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|max:4048',
            'weight' => 'required|numeric',
            'packaging' => 'required|numeric',
            'technology_id' => 'required|exists:technologies,id',
            'recipe_id' => 'required|exists:recipes,id',
        ]);
        Log::info('Validation passed for product ID: ' . $product->id);
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($product->image) {
                Log::info('Deleting old image for product ID: ' . $product->id);
                Storage::disk('public')->delete(str_replace('/storage/', '', $product->image));
            }

            $imageName = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('images/products', $imageName, 'public');
            $validated['image'] = '/storage/' . $path;
            Log::info('New image uploaded for product ID: ' . $product->id);
        } elseif ($request->input('delete_image') === '1') {
            // Delete the old image if the delete_image checkbox is checked
            if ($product->image) {
                Log::info('Deleting image for product ID: ' . $product->id);
                Storage::disk('public')->delete(str_replace('/storage/', '', $product->image));
                $validated['image'] = null;
            }
        }
        // Display a terminal message
        Log::info('Updating product ID: ' . $product->id);
        $product->update($validated);
        Log::info('Product updated successfully: ' . $product->id);
        return redirect()->route('admin.products.index');
    }

    public function destroy(Product $product)
    {
        // Delete the image if it exists
        if ($product->image) {
            Storage::disk('public')->delete(str_replace('/storage/', '', $product->image));
        }

        $product->delete();
        return redirect()->route('admin.products.index');
    }
}
