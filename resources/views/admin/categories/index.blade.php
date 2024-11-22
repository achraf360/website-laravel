@extends('layouts.admin')

@section('title', 'Manage Categories')

@section('content')
<h1 class="text-3xl font-bold mb-4">Manage Categories</h1>
<a href="{{ route('admin.categories.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add New Category</a>
<ul class="list-disc pl-5 mt-4">
    @foreach($categories as $category)
    <li class="mb-2">
        <a href="{{ route('admin.categories.edit', $category->id) }}" class="text-blue-500 hover:underline">{{ $category->name }}</a>
        <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" class="inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-500 hover:underline">Delete</button>
        </form>
    </li>
    @endforeach
</ul>
@endsection