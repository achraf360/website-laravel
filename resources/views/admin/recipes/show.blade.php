@extends('layouts.admin')

@section('title', 'Détails de la recette')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-4">{{ $recipe->name }}</h1>
    <div class="flex flex-row gap-4">
        <div class="flex flex-col w-3/4 gap-2">
            <p class="text-md font-normal">{{ $recipe->description }}</p>
            <p class="text-md font-normal">Créé à {{ $recipe->created_at }}</p>
            <p class="text-md font-normal">Mis à jour à {{ $recipe->updated_at }}</p>
            <a href="{{ route('admin.recipes.edit', $recipe->id) }}" class="bg-yellow-500 w-fit hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Modifier la recette</a>
        </div>
    </div>

</div>
@endsection