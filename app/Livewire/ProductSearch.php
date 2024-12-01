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

    public function mount(Category $category)
    {
        $this->category = $category;
    }

    public function updatedQuery()
    {
        Log::info('Query updated: ' . $this->query);
    }

    public function updatedSelectedRecipes()
    {
        Log::info('Selected Recipes updated: ' . implode(', ', $this->selectedRecipes));
    }


    public function render()
    {
        Log::info('Render method called');
        Log::info('Query: ' . $this->query);
        Log::info('Selected Recipes: ' . implode(', ', $this->selectedRecipes));
        $products = $this->category->products()
            ->when($this->query, function ($queryBuilder) {
                $queryBuilder->where('name', 'like', "%{$this->query}%");
            })
            ->when($this->selectedRecipes, function ($queryBuilder) {
                $queryBuilder->whereIn('recipe_id', $this->selectedRecipes);
            })
            ->get();

        $recipes = Recipe::all();

        return view('livewire.product-search', [
            // 'products' => $products,
            'products' => $products,
            'recipes' => $recipes,
        ]);
    }
}
