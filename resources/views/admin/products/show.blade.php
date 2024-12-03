@extends('layouts.admin')

@section('title', 'Détails du produit')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-4">{{ $product->name }}</h1>
    <div class="flex flex-row gap-4">
        <div class="flex flex-col w-3/4 gap-2">
            <p class="text-md font-normal">Reference : {{ $product->ref }}</p>
            <p class="text-md font-normal">{{ $product->description }}</p>
            <div class="flex w-1/4"><img src="{{ $product->image }}" alt="{{ $product->name }}" class="h-auto w-auto"></div>
            <p class="text-md font-normal">Poids : {{ $product->weight }} g</p>
            <p class="text-md font-normal">Conditionnement : {{ $product->packaging }} U</p>
            <p class="text-md font-normal">Dimensions : {{ $product->dimensions }} cm</p>
            <p class="text-md font-normal">Catégorie : {{ $product->category->name }}</p>
            <p class="text-md font-normal">Technologie : {{ $product->technology->name }}</p>
            <p class="text-md font-normal">Recette : {{ $product->recipe->name }}</p>
            <p class="text-md font-normal">Créé à {{ $product->created_at }}</p>
            <p class="text-md font-normal">Mis à jour à {{ $product->updated_at }}</p>
            <a href="{{ route('admin.categories.edit', $product->id) }}" class="bg-yellow-500 w-fit hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Modifier le produit</a>
        </div>
    </div>

</div>
@endsection