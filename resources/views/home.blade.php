@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section class="relative bg-cover bg-center h-screen w-screen overflow-hidden" style="background-image: url('/images/home-top-bg.jpg');">
  <!-- <div class="absolute inset-0 bg-black opacity-50"></div> -->
  <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-black">
    <h1 class="text-5xl font-bold mb-4">Welcome to Our Store</h1>
    <p class="text-xl mb-8">Discover our amazing products and categories</p>
    <a href="{{ route('categories.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Shop Now</a>
  </div>
</section>
<section class="p-8">
  <h1 class="text-5xl font-extrabold text-center text-gray-700 py-12">Nos Categories</h1>


  <ul class="list-disc pl-5  grid grid-flow-row grid-cols-3 place-items-center gap-4">
    @foreach($categories as $category)
    <!-- <a href="{{ route('categories.show', $category->id) }}"> -->
    <a href="{{ route('categories.show', $category->name) }}"
      class="flex items-center relative bg-cover bg-center overflow-hidden w-full h-80 rounded-3xl cursor-pointer text-2xl font-bold" style="background-image: url('{{ $category->image }}');">

      <div class="z-10 absolute w-full h-full peer"></div>
      <div
        class="absolute peer-hover:-top-20 peer-hover:-left-16 peer-hover:w-[140%] peer-hover:h-[140%] -top-32 -left-16 w-32 h-44 rounded-full bg-blue-900 transition-all duration-500"></div>
      <div
        class="absolute flex text-xl text-center items-end justify-end peer-hover:right-0 peer-hover:rounded-b-none peer-hover:bottom-0 peer-hover:items-center peer-hover:justify-center peer-hover:w-full peer-hover:h-full -bottom-32 -right-16 w-36 h-44 rounded-full bg-blue-900 transition-all duration-500 text-white uppercase font-extrabold">
        {{$category->name}}
      </div>
      <!-- <div class="w-full h-full items-center justify-center flex uppercase">
        hover me
      </div> -->

    </a>

    @endforeach
  </ul>
</section>
@endsection