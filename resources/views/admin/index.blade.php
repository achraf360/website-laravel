@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
<h1 class="text-3xl font-bold mb-4">Admin Dashboard</h1>
<p>Bienvenue, administrateur ! Utilisez les liens ci-dessous pour gérer les données.</p>
<ul>
    <li><a href="{{ route('admin.categories.index') }}" class="text-blue-500 hover:underline">Gérer les catégories</a></li>
    <li><a href="{{ route('admin.products.index') }}" class="text-blue-500 hover:underline">Gérer les produits</a></li>
    <li><a href="{{ route('admin.technologies.index') }}" class="text-blue-500 hover:underline">Gérer les technologies</a></li>
    <li><a href="{{ route('admin.recipes.index') }}" class="text-blue-500 hover:underline">Gérer les recettes</a></li>
</ul>
@endsection