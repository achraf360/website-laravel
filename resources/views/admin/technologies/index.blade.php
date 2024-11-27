@extends('layouts.admin')

@section('title', 'Manage Technologies')

@section('content')
<h1 class="text-3xl font-bold mb-4">Manage Technologies</h1>
<a href="{{ route('admin.technologies.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add New Technology</a>
<ul class="list-disc pl-5 mt-4">
    @foreach($technologies as $technology)
    <li class="mb-2">
        <a href="{{ route('admin.technologies.edit', $technology->id) }}" class="text-blue-500 hover:underline">{{ $technology->name }}</a>
        <form action="{{ route('admin.technologies.destroy', $technology->id) }}" method="POST" class="inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-500 hover:underline">Delete</button>
        </form>
    </li>
    @endforeach
</ul>
@endsection