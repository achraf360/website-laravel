@extends('layouts.app')

@section('title', $category->name)

@section('content')
<div class="flex flex-col w-full">

  <!-- <section class="flex flex-wrap">
        <div class="w-full sm:w-8/12">
            <div class="container mx-auto h-full sm:p-10">
                <nav class="flex px-4 justify-between items-center">
                    <div>
                        <img src="https://image.flaticon.com/icons/svg/497/497348.svg" alt="" class="w-8">
                    </div>
                </nav>
                <header class="container px-4 lg:flex mt-10 items-center h-full lg:mt-0">
                    <div class="w-full">
                        <h1 class="text-4xl lg:text-6xl font-bold">{{ $category->name }}</h1>
                        <div class="w-20 h-2 bg-blue-800 my-4"></div>
                        <p class="text-md mb-10">{{ $category->description }}</p>
                        <button class="bg-green-500 text-white text-2xl font-medium px-4 py-2 rounded shadow">Learn More</button>
                    </div>
                </header>
            </div>
        </div>
        <img src="{{ $category->image }}" alt="Leafs" class="w-full h-48 object-cover sm:h-screen sm:w-4/12">
    </section> -->

  <section class="px-2 py-10 bg-white md:px-0">
    <div class="items-center justify-between mx-16 xl:px-5">
      <div class="flex flex-wrap items-center sm:-mx-3">
        <div class="w-full md:w-1/2 md:px-3">
          <div class="w-full pb-6 space-y-6 sm:max-w-md lg:max-w-lg md:space-y-4 lg:space-y-8 xl:space-y-9 sm:pr-5 lg:pr-0 md:pb-0">
            <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl">
              <span class="block text-indigo-800 xl:inline">{{ $category->name }}.</span>
            </h1>
            <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-md md:max-w-3xl">{{ $category->description }}</p>
            <p class="text-base ">Nous proposons <span class="font-bold">{{ $productCount }} produits</span> différents.</p>
            <div class="relative flex flex-col sm:flex-row sm:space-x-4">
              <a href="#_" class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-indigo-600 rounded-md sm:mb-0 hover:bg-indigo-700 sm:w-auto">
                Try It Free
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </a>
              <a href="#_" class="flex items-center px-6 py-3 text-gray-500 bg-gray-100 rounded-md hover:bg-gray-200 hover:text-gray-600">
                Learn More
              </a>
            </div>
          </div>
        </div>
        <div class="w-full md:w-1/2">
          <div class="w-full h-full overflow-hidden rounded-md shadow-xl sm:rounded-xl">
            <img src="{{ $category->image }}" class="w-full h-1/2 object-cover">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="flex flex-col bg-slate-100 p-10">
    <h2 class="text-5xl font-extrabold mb-20 text-center">Produits</h2>
    <ul class="list-disc pl-5 grid grid-flow-row grid-cols-3 place-items-center gap-4">
      @foreach($products as $product)
      <!-- <li class="mb-2">
        <a href="{{ route('products.show', $product->id) }}" class="text-blue-500 hover:underline">{{ $product->name }}</a>
        <p>{{ $product->description }}</p>
        <p>{{ $product->price }}</p>
        @if ($product->image)
        <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-32 h-32">
        @endif
      </li> -->

      <li class="w-60 h-80 bg-white rounded-3xl text-neutral-800 flex flex-col items-start justify-center gap-3  hover:shadow-2xl hover:shadow-indigo-800 hover:-translate-y-1 transition-all duration-300">
        <div class="w-full h-full rounded-2xl bg-cover bg-center" style="background-image: url('{{ $product->image }}');">
        </div>
        <div class="flex flex-col p-4 gap-4">
          <p class="font-extrabold">{{ $product->name }}</p>
          <div class="flex flex-col">
            <p class="text-sm">Poids à l'unité : {{ $product->weight }}</p>
            <p class="text-sm">Unités par carton : {{ $product->packaging }}</p>
          </div>

          <span class="bg-sky-700 font-extrabold p-2 px-6 rounded-xl text-center text-white">{{ $product->ref }}</spa>
        </div>

      </li>
      @endforeach
    </ul>
  </section>

</div>
@endsection