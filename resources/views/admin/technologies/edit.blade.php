@extends('layouts.admin')

@section('title', 'Modifier la technologie')

@section('content')
<h1 class="text-3xl font-bold mb-4">Modifier la technologie</h1>

<form action="{{ route('admin.technologies.update', $technology->id) }}" method="POST" class="w-1/2">
    @csrf
    @method('PUT')
    <div class="mb-4">
        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nom:</label>
        <input type="text" name="name" id="name" value="{{ $technology->name }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
    </div>
    <div class="mb-4">
        <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
        <textarea name="description" id="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ $technology->description }}</textarea>
    </div>
    <div class="flex items-center justify-between">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            Modifier
        </button>
    </div>
</form>
@endsection