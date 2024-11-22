@extends('layouts.app')

@section('title', 'Categories')

@section('content')
<h1 class="text-3xl font-bold mb-4">Categories</h1>
<ul class="list-disc pl-5">
    @foreach($categories as $category)
    <li class="mb-2"><a href="{{ route('categories.show', $category->name) }}" class="text-blue-500 hover:underline">{{ $category->name }}</a></li>
    @endforeach
</ul>
@endsection