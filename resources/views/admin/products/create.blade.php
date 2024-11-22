@extends('layouts.admin')

@section('title', 'Create Product')

@section('content')
<h1 class="text-3xl font-bold mb-4">Create Product</h1>

<form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-4">
        <label for="ref" class="block text-gray-700 text-sm font-bold mb-2">Code:</label>
        <input type="text" name="ref" id="ref" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
    </div>
    <div class="mb-4">
        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
        <input type="text" name="name" id="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
    </div>
    <div class="mb-4">
        <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
        <textarea name="description" id="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
    </div>
    <div class="mb-4">
        <label for="price" class="block text-gray-700 text-sm font-bold mb-2">Price:</label>
        <input type="number" name="price" id="price" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
    </div>
    <div class="mb-4">
        <label for="category_id" class="block text-gray-700 text-sm font-bold mb-2">Category:</label>
        <select name="category_id" id="category_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-4">
        <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Image:</label>
        <input type="file" name="image" id="image" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    </div>
    <div class="flex items-center justify-between">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            Create
        </button>
    </div>
</form>
@endsection