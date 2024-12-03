@extends('layouts.admin')

@section('title', 'Gérer les recettes')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-4">Gérer les recettes</h1>
    @livewire('admin-recipes-list')
</div>
@endsection