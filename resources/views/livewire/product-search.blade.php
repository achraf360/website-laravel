<div class="flex w-full">
    <!-- Search and Filter Sidebar -->
    <div class="w-1/4 p-4 bg-white shadow-lg rounded-lg">
        <h2 class="text-xl font-normal mb-4">Recherche</h2>
        <input type="text" wire:model.live.debounce.500ms="query" name="query" class="w-full p-2 border rounded mb-4" placeholder="Cherche produits...">
        <h3 class="text-xl font-normal mb-2">Filtrer par recette</h3>
        @foreach($recipes as $recipe)
        <div class="mb-2 text-sm">
            <input type="checkbox" wire:model.live="selectedRecipes" id="recipe_{{ $recipe->id }}" value="{{ $recipe->id }}" class="recipe-checkbox">
            <label for="recipe_{{ $recipe->id }}">{{ $recipe->name }}</label>
        </div>
        @endforeach
        <h3 class="text-xl font-normal mb-2 mt-5">Filtrer par technologie</h3>
        @foreach($technologies as $technology)
        <div class="mb-2 text-sm">
            <input type="checkbox" wire:model.live="selectedRecipes" id="technology_{{ $technology->id }}" value="{{ $technology->id }}" class="technology-checkbox">
            <label for="technology_{{ $technology->id }}">{{ $technology->name }}</label>
        </div>
        @endforeach
    </div>

    <!-- Products Section -->
    <div class="w-3/4 p-4">
        <section class="flex flex-col bg-slate-100 p-10">

            <!-- Loading Spinner -->
            <div wire:loading.flex wire:target="query,selectedRecipes" class="justify-center items-center">
                <svg class="animate-spin h-8 w-8 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path>
                </svg>
            </div>

            <!-- No Products Message -->
            <div wire:loading.remove wire:target="query,selectedRecipes,selectedTechnologies">
                @if ($products->isEmpty())
                <div class="flex justify-center items-center">
                    <p class="text-gray-500">No products found.</p>
                </div>
                @endif

                <!-- Products List -->
                @if ($products->isNotEmpty())
                <ul class="list-disc pl-5 grid grid-flow-row grid-cols-3 place-items-center gap-4">
                    @foreach($products as $product)
                    <li class="w-60 h-full grow shrink-0 bg-white rounded-3xl text-neutral-800 flex flex-col items-start justify-center gap-3 hover:shadow-2xl hover:shadow-indigo-800 hover:-translate-y-1 transition-all duration-300">
                        <a href="{{ route('products.show', $product->id) }}" class="w-full h-full rounded-2xl bg-cover bg-center">
                            <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full h-full object-cover rounded-2xl" loading="lazy">
                        </a>
                        <div class="flex flex-col p-4 gap-4 w-full">
                            <p class="font-extrabold">{{ $product->name }}</p>
                            <div class="flex flex-col">
                                <p class="text-sm">Poids à l'unité : {{ $product->weight }} g</p>
                                <p class="text-sm">Unités par carton : {{ $product->packaging }} U</p>
                            </div>
                            <span class="bg-sky-700 font-extrabold p-2 px-6 rounded-xl text-center text-white">{{ $product->ref }}</span>
                        </div>
                    </li>
                    @endforeach
                </ul>
                @endif
                <!-- Pagination Links -->
                <div class="mt-4">
                    {{ $products->links() }}
                </div>
            </div>
        </section>
    </div>
</div>