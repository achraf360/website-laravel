<div>
    <div class="flex justify-between items-center mb-4">
        <input type="text" wire:model.live.debounce.500ms="search" class="border p-2 rounded" placeholder="Recherche...">
        <a href="{{ route('admin.categories.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Ajouter une nouvelle catégorie</a>
    </div>

    <div wire:loading.flex wire:target="search" class="justify-center items-center">
        <svg class="animate-spin h-8 w-8 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path>
        </svg>
    </div>

    <table class="min-w-full bg-white" wire:loading.remove wire:target="search">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">Nom</th>
                <th class="py-2 px-4 border-b">Actions</th>
            </tr>
        </thead>
        <tbody>
            @if ($categories->isEmpty())
            <tr>
                <td colspan="4" class="py-2 px-4 border-b text-center text-gray-500">Aucune catégorie trouvée.</td>
            </tr>
            @else
            @foreach($categories as $category)
            <tr class="text-center">
                <td class="py-2 px-4 border-b cursor-pointer hover:bg-gray-100 transition-colors duration-300" onclick=window.location='{{ route('admin.categories.show', $category->id) }}'>{{ $category->name }}</td>
                <td class="py-2 px-4 border-b font-normal">
                    <a href="{{ route('admin.categories.edit', $category->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white py-1 px-2 rounded">Modifier</a>
                    <button wire:click="deleteCategory({{ $category->id }})" class="bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded">Supprimer</button>
                </td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>

    <div class="mt-4">
        {{ $categories->links() }}
    </div>
</div>