<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;

class AdminProductsList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';

    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function deleteProduct($productId)
    {
        $product = Product::find($productId);
        if ($product) {
            $product->delete();
        }
    }

    public function render()
    {
        $products = Product::where('name', 'like', '%' . $this->search . '%')
            ->paginate(10);

        return view('livewire.admin-products-list', [
            'products' => $products,
        ]);
    }
}
