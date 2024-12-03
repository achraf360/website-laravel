@extends('layouts.admin')

@section('title', 'Détails de la technologie')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-4">{{ $technology->name }}</h1>
    <div class="flex flex-row gap-4">
        <div class="flex flex-col w-3/4 gap-2">
            <p class="text-md font-normal">{{ $technology->description }}</p>
            <p class="text-md font-normal">Créé à {{ $technology->created_at }}</p>
            <p class="text-md font-normal">Mis à jour à {{ $technology->updated_at }}</p>
            <a href="{{ route('admin.technologies.edit', $technology->id) }}" class="bg-yellow-500 w-fit hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Modifier la technologie</a>
        </div>
    </div>

</div>
@endsection