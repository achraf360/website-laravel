<div>
    <h2 class="text-2xl font-bold mb-4">Search & Filter</h2>
    <input type="text" wire:model.live="search" name="search" class="w-full p-2 border rounded mb-4" placeholder="Search products...">

    <p>{{$search}}</p>
</div>