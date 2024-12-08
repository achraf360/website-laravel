<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
use Illuminate\Database\QueryException;

class AdminProductsList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';

    public $search = '';
    public $errorMessage = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function deleteProduct($productId)
    {
        try {
            $product = Product::find($productId);
            if ($product) {
                $product->delete();
            }
        } catch (QueryException $e) {
            $this->errorMessage = 'Cannot delete this product because it is associated with other records.';
        }
    }

    public function clearErrorMessage()
    {
        $this->errorMessage = '';
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
