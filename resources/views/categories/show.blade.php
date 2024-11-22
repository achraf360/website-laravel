@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold mb-4">{{ $category->name }}</h1>
<h2 class="text-2xl font-semibold mb-2">Products</h2>
<ul class="list-disc pl-5">
    @foreach($products as $product)
    <li class="mb-2"><a href="{{ route('products.show', $product->name) }}" class="text-blue-500 hover:underline">{{ $product->name }}</a></li>
    @endforeach
</ul>
@endsection