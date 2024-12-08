@extends('layouts.admin')

@section('title', 'Créer une catégorie')

@section('content')
<h1 class="text-3xl font-bold mb-4">Créer une catégorie</h1>

<form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data" class="w-1/2">
    @csrf
    <div class="mb-4">
        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nom:</label>
        <input type="text" name="name" id="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
    </div>
    <div class="mb-4">
        <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
        <textarea name="description" id="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required></textarea>
    </div>
    <div class="mb-4">
        <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Image:</label>
        <input type="file" name="image" id="image" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    </div>
    <!-- <div class="mb-4">
        <label for="header_image" class="block text-gray-700 text-sm font-bold mb-2">En-tête Image:</label>
        <input type="file" name="header_image" id="header_image" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    </div> -->
    <div class="flex items-center justify-between">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            Créer
        </button>
    </div>
</form>
@endsection