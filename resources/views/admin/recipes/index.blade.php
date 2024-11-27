@extends('layouts.admin')

@section('title', 'Manage Recipes')

@section('content')
<h1 class="text-3xl font-bold mb-4">Manage Recipes</h1>
<a href="{{ route('admin.recipes.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add New Recipe</a>
<ul class="list-disc pl-5 mt-4">
    @foreach($recipes as $recipe)
    <li class="mb-2">
        <a href="{{ route('admin.recipes.edit', $recipe->id) }}" class="text-blue-500 hover:underline">{{ $recipe->name }}</a>
        <form action="{{ route('admin.recipes.destroy', $recipe->id) }}" method="POST" class="inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-500 hover:underline">Delete</button>
        </form>
    </li>
    @endforeach
</ul>
@endsection