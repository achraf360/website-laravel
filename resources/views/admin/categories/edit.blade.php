@extends('layouts.admin')

@section('title', 'Modifier la catégorie')

@section('content')
<h1 class="text-3xl font-bold mb-4">Modifier la catégorie</h1>

<form action="{{ route('admin.categories.update', $category->id) }}" method="POST" enctype="multipart/form-data" class="w-1/2">
    @csrf
    @method('PUT')
    <div class="mb-4">
        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nom:</label>
        <input type="text" name="name" id="name" value="{{ $category->name }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
    </div>
    <div class="mb-4">
        <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
        <textarea name="description" id="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ $category->description }}</textarea>
    </div>
    <div class="mb-4">
        <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Image:</label>
        @if ($category->image)
        <img src="{{ $category->image }}" alt="{{ $category->name }}" class="w-16 h-16 mb-2">
        <input type="checkbox" name="delete_image" id="delete_image" value="1">
        <label for="delete_image" class="text-red-500">Supprimer l'image</label>
        @endif
        <input type="file" name="image" id="image" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    </div>
    <!-- <div class="mb-4">
        <label for="header_image" class="block text-gray-700 text-sm font-bold mb-2">En-tête Image:</label>
        @if ($category->header_image)
        <img src="{{ $category->header_image }}" alt="{{ $category->name }}" class="w-16 h-16 mb-2">
        <input type="checkbox" name="delete_header_image" id="delete_header_image" value="1">
        <label for="delete_header_image" class="text-red-500">Supprimer l'image d'en-tête</label>
        @endif
        <input type="file" name="header_image" id="header_image" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    </div> -->
    <div class="flex items-center justify-between">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            Modifier
        </button>
    </div>
</form>
@endsection