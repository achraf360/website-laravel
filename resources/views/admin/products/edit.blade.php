@extends('layouts.admin')

@section('title', 'Modifier le produit')

@section('content')
<h1 class="text-3xl font-bold mb-4">Modifier le produit</h1>

<form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data" class="w-1/2">
    @csrf
    @method('PUT')
    <div class="mb-4">
        <label for="ref" class="block text-gray-700 text-sm font-bold mb-2">Reference:</label>
        <input type="text" name="ref" id="ref" value="{{ $product->ref }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
    </div>
    <div class="mb-4">
        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nom:</label>
        <input type="text" name="name" id="name" value="{{ $product->name }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
    </div>
    <div class="mb-4">
        <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
        <textarea name="description" id="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ $product->description }}</textarea>
    </div>
    <div class="mb-4">
        <label for="weight" class="block text-gray-700 text-sm font-bold mb-2">Poids:</label>
        <input type="number" name="weight" id="weight" value="{{ $product->weight }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
    </div>
    <div class="mb-4">
        <label for="packaging" class="block text-gray-700 text-sm font-bold mb-2">Conditionnement:</label>
        <input type="number" name="packaging" id="packaging" value="{{ $product->packaging }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
    </div>
    <div class="mb-4">
        <label for="dimensions" class="block text-gray-700 text-sm font-bold mb-2">Dimensions:</label>
        <input type="number" name="dimensions" id="dimensions" value="{{ $product->dimensions }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
    </div>
    <div class="mb-4">
        <label for="category_id" class="block text-gray-700 text-sm font-bold mb-2">Categorie:</label>
        <select name="category_id" id="category_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-4">
        <label for="technology_id" class="block text-gray-700 text-sm font-bold mb-2">Technologie:</label>
        <select name="technology_id" id="technology_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            @foreach($technologies as $technology)
            <option value="{{ $technology->id }}" {{ $product->technology_id == $technology->id ? 'selected' : '' }}>{{ $technology->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-4">
        <label for="recipe_id" class="block text-gray-700 text-sm font-bold mb-2">Recette:</label>
        <select name="recipe_id" id="recipe_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            @foreach($recipes as $recipe)
            <option value="{{ $recipe->id }}" {{ $product->recipe_id == $recipe->id ? 'selected' : '' }}>{{ $recipe->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-4">
        <label for="is_active" class="block text-gray-700 text-sm font-bold mb-2">Active:</label>
        <input type="hidden" name="is_active" value="0">
        <input type="checkbox" name="is_active" id="is_active" class="shadow appearance-none border rounded text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="1" {{ $product->is_active ? 'checked' : '' }}>
    </div>
    <div class="mb-4">
        <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Image:</label>
        @if ($product->image)
        <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-16 h-16 mb-2">
        <input type="checkbox" name="delete_image" id="delete_image" value="1">
        <label for="delete_image" class="text-red-500">Supprimer l'image</label>
        @endif
        <input type="file" name="image" id="image" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    </div>
    <div class="flex items-center justify-between">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            Modifier
        </button>
    </div>
</form>
@endsection