@extends('layouts.app')

@section('content')
<h1>{{ $product->name }}</h1>
<p>{{ $product->description }}</p>
<p>Price: ${{ $product->price }}</p>
<p>Category: <a href="{{ route('categories.show', $product->category->name) }}">{{ $product->category->name }}</a></p>
@endsection