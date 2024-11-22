@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
<h1 class="text-3xl font-bold mb-4">Admin Dashboard</h1>
<p>Welcome, Admin! Use the links below to manage categories and products.</p>
<ul>
    <li><a href="{{ route('admin.categories.index') }}" class="text-blue-500 hover:underline">Manage Categories</a></li>
    <li><a href="{{ route('admin.products.index') }}" class="text-blue-500 hover:underline">Manage Products</a></li>
</ul>
@endsection