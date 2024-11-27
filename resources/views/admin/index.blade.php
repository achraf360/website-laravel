@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
<h1 class="text-3xl font-bold mb-4">Admin Dashboard</h1>
<p>Welcome, Admin! Use the links below to manage data.</p>
<ul>
    <li><a href="{{ route('admin.categories.index') }}" class="text-blue-500 hover:underline">Manage Categories</a></li>
    <li><a href="{{ route('admin.products.index') }}" class="text-blue-500 hover:underline">Manage Products</a></li>
    <li><a href="{{ route('admin.technologies.index') }}" class="text-blue-500 hover:underline">Manage Technologies</a></li>
    <li><a href="{{ route('admin.recipes.index') }}" class="text-blue-500 hover:underline">Manage Recipes</a></li>
</ul>
@endsection