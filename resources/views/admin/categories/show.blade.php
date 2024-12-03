@extends('layouts.admin')

@section('title', 'Détails de la catégorie')

@section('content')
<div class="container mx-auto px-4 py-8">
  <h1 class="text-3xl font-bold mb-4">{{ $category->name }}</h1>
  <div class="flex flex-row gap-4">
    <div class="flex flex-col w-3/4">
      <p class="text-md font-normal  mb-8">{{ $category->description }}</p>
      <div class="flex w-1/4"><img src="{{ $category->image }}" alt="{{ $category->name }}" class="h-auto w-auto mb-8"></div>
      <p class="text-md font-normal">Créé à {{ $category->created_at }}</p>
      <p class="text-md font-normal">Mis à jour à {{ $category->updated_at }}</p>
      <a href="{{ route('admin.categories.edit', $category->id) }}" class="bg-yellow-500 w-fit hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Modifier la catégorie</a>
    </div>
  </div>

</div>
@endsection