<div>
  <div class="flex justify-between items-center mb-4">
    <input type="text" wire:model.live.debounce.500ms="search" class="border p-2 rounded" placeholder="Recherche...">
    <a href="{{ route('admin.products.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Ajouter un nouveau produit</a>
  </div>
  @if ($errorMessage)
  <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
    <strong class="font-bold">Error!</strong>
    <span class="block sm:inline">{{ $errorMessage }}</span>
    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
      <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" wire:click="clearErrorMessage">
        <title>Close</title>
        <path d="M14.348 14.849a1 1 0 01-1.414 0L10 11.414l-2.934 2.935a1 1 0 01-1.414-1.414l2.935-2.934-2.935-2.934a1 1 0 011.414-1.414L10 8.586l2.934-2.935a1 1 0 011.414 1.414L11.414 10l2.935 2.934a1 1 0 010 1.415z" />
      </svg>
    </span>
  </div>
  @endif
  <div wire:loading.flex wire:target="search" class="justify-center items-center">
    <svg class="animate-spin h-8 w-8 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
      <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
      <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path>
    </svg>
  </div>

  <table class="min-w-full bg-white" wire:loading.remove wire:target="search">
    <thead>
      <tr>
        <th class="py-2 px-4 border-b">Reference</th>
        <th class="py-2 px-4 border-b">Nom</th>
        <th class="py-2 px-4 border-b">Categorie</th>
        <th class="py-2 px-4 border-b">Actions</th>
      </tr>
    </thead>
    <tbody>
      @if ($products->isEmpty())
      <tr>
        <td colspan="4" class="py-2 px-4 border-b text-center text-gray-500">Aucun produit trouvé.</td>
      </tr>
      @else
      @foreach($products as $product)
      <tr class="text-center">
        <td class="py-2 px-4 border-b">{{ $product->ref }}</td>
        <td class="py-2 px-4 border-b cursor-pointer hover:bg-gray-100 transition-colors duration-300" onclick=window.location='{{ route('admin.products.show', $product->id) }}'>{{ $product->name }}</td>
        <td class="py-2 px-4 border-b">{{ $product->category->name }}</td>
        <td class="py-2 px-4 border-b font-normal z-50">
          <a href="{{ route('admin.products.edit', $product->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white py-1 px-2 rounded"><i class="fa-solid fa-pen-to-square"></i></a>
          <button wire:click="deleteProduct({{ $product->id }})" class="bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded"><i class="fa-solid fa-trash"></i></button>
        </td>
      </tr>
      @endforeach
      @endif
    </tbody>
  </table>

  <div class="mt-4">
    {{ $products->links() }}
  </div>
</div>