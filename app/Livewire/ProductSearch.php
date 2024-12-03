<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Recipe;
use App\Models\Product;
use Illuminate\Support\Facades\Log;

class ProductSearch extends Component
{
    public $category;
    public $query = '';
    public $selectedRecipes = [];

    protected $paginationTheme = 'tailwind';

    public function mount(Category $category)
    {
        $this->category = $category;
    }

    public function updatedQuery()
    {
        $this->resetPage();
    }

    // public function updatedSelectedRecipes()
    // {
    //     $this->resetPage();
    // }


    public function render()
    {
        $products = $this->category->products()
            ->when($this->query, function ($queryBuilder) {
                $queryBuilder->where('name', 'like', "%{$this->query}%");
            })
            ->when($this->selectedRecipes, function ($queryBuilder) {
                $queryBuilder->whereIn('recipe_id', $this->selectedRecipes);
            })
            ->paginate(9);

        $recipes = Recipe::all();

        return view('livewire.product-search', [
            // 'products' => $products,
            'products' => $products,
            'recipes' => $recipes,
        ]);
    }
}
