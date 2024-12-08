@extends('layouts.app')

@section('title', $product->name)

@section('content')

<div class="bg-white dark:bg-gray-800 py-20">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row -mx-4">
            <div class="md:flex-1 px-4">
                <div class="max-h-[460px] rounded-lg bg-gray-300 dark:bg-gray-700 mb-4">
                    <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full h-auto rounded-lg">
                </div>
            </div>
            <div class="md:flex-1 px-4">
                <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-2">{{ $product->name }}</h2>
                <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed
                    ante justo. Integer euismod libero id mauris malesuada tincidunt.
                </p>
                <div class="flex mb-4">
                    <div class="mr-4">
                        <span class="font-bold text-gray-700 dark:text-gray-300">Poids:</span>
                        <span class="text-gray-600 dark:text-gray-300">{{ $product->weight }} g</span>
                    </div>
                    <div>
                        <span class="font-bold text-gray-700 dark:text-gray-300">Conditionnement:</span>
                        <span class="text-gray-600 dark:text-gray-300">{{ $product->packaging }} U</span>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="flex items-center mt-2">
                        <span class="bg-gray-300 dark:bg-gray-700 text-gray-700 dark:text-white py-2 px-4 rounded-full font-bold mr-2 hover:bg-gray-400 dark:hover:bg-gray-600">{{ $product->technology->name }}</span>
                        <span class="bg-gray-300 dark:bg-gray-700 text-gray-700 dark:text-white py-2 px-4 rounded-full font-bold mr-2 hover:bg-gray-400 dark:hover:bg-gray-600">{{ $product->recipe->name }}</span>
                    </div>
                </div>
                <div>
                    <span class="font-bold text-gray-700 dark:text-gray-300">Product Description:</span>
                    <p class="text-gray-600 dark:text-gray-300 text-sm mt-2">
                        {{ $product->description }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection