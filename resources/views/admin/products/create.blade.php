@extends('layouts.admin')

@section('title', 'Créer un produit')

@section('content')
<h1 class="text-3xl font-bold mb-4">Créer un produit</h1>

<form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data" class="w-1/2">
    @csrf
    <div class="mb-4">
        <label for="ref" class="block text-gray-700 text-sm font-bold mb-2">Reference:</label>
        <input type="text" name="ref" id="ref" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
    </div>
    <div class="mb-4">
        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nom:</label>
        <input type="text" name="name" id="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
    </div>
    <div class="mb-4">
        <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
        <textarea name="description" id="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
    </div>
    <div class="mb-4">
        <label for="weight" class="block text-gray-700 text-sm font-bold mb-2">Poids:</label>
        <input type="text" name="weight" id="weight" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></input>
    </div>
    <div class="mb-4">
        <label for="packaging" class="block text-gray-700 text-sm font-bold mb-2">Conditionnement:</label>
        <input type="text" name="packaging" id="packaging" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></input>
    </div>
    <div class="mb-4">
        <label for="dimensions" class="block text-gray-700 text-sm font-bold mb-2">Dimensions:</label>
        <input type="text" name="dimensions" id="dimensions" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></input>
    </div>
    <div class="mb-4">
        <label for="category_id" class="block text-gray-700 text-sm font-bold mb-2">Categorie:</label>
        <select name="category_id" id="category_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-4">
        <label for="technology_id" class="block text-gray-700 text-sm font-bold mb-2">Technologie:</label>
        <select name="technology_id" id="technology_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            @foreach($technologies as $technology)
            <option value="{{ $technology->id }}">{{ $technology->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-4">
        <label for="recipe_id" class="block text-gray-700 text-sm font-bold mb-2">Recette:</label>
        <select name="recipe_id" id="recipe_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            @foreach($recipes as $recipe)
            <option value="{{ $recipe->id }}">{{ $recipe->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-4">
        <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Image:</label>
        <input type="file" name="image" id="image" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    </div>
    <div class="mb-4">
        <label for="is_active" class="block text-gray-700 text-sm font-bold mb-2">Active:</label>
        <input type="checkbox" name="is_active" id="is_active" class="shadow appearance-none border rounded text-gray-700 leading-tight focus:outline-none focus:shadow-outline" checked>
    </div>
    <div class="flex items-center justify-between">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            Créer
        </button>
    </div>
</form>
@endsection