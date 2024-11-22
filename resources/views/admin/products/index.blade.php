@extends('layouts.admin')

@section('title', 'Manage Products')

@section('content')
<h1 class="text-3xl font-bold mb-4">Manage Products</h1>
<a href="{{ route('admin.products.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add New Product</a>
<ul class="list-disc pl-5 mt-4">
    @foreach($products as $product)
    <li class="mb-2">
        <a href="{{ route('admin.products.edit', $product->id) }}" class="text-blue-500 hover:underline">{{ $product->name }}</a>
        <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" class="inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-500 hover:underline">Delete</button>
        </form>
    </li>
    @endforeach
</ul>
@endsection