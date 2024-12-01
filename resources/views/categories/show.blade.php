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
          <div class="flex flex-col w-full pb-6 space-y-6 sm:max-w-md lg:max-w-lg md:space-y-4 lg:space-y-8 xl:space-y-9 sm:pr-5 lg:pr-0 md:pb-0">
            <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl">
              <span class="block text-indigo-800 xl:inline">{{ $category->name }}.</span>
            </h1>
            <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-md md:max-w-3xl">{{ $category->description }}</p>
            <p class="flex text-lg text-white bg-[#6FB72B] rounded-full px-2 py-2 w-fit">Nous proposons&nbsp;<span class="font-bold">{{ $productCount }}&nbsp;produits&nbsp;</span> différents.</p>
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
    <!-- @livewire('search-bar') -->
    <div class="flex flex-row">

      @livewire('product-search', ['category' => $category])
      <!-- <div class="w-3/4 p-4">
        <ul class="list-disc pl-5 grid grid-flow-row grid-cols-3 place-items-center gap-4">
          @foreach($products as $product)

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
      </div> -->
    </div>




  </section>
</div>
@endsection