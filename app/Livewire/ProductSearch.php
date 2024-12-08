<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Recipe;
use App\Models\Product;
use App\Models\Technology;
use Illuminate\Support\Facades\Log;
use Livewire\WithPagination;

class ProductSearch extends Component
{
    use WithPagination;
    public $category;
    public $query = '';
    public $selectedRecipes = [];
    public $selectedTechnologies = [];
    protected $paginationTheme = 'tailwind';

    public function mount(Category $category)
    {
        $this->category = $category;
    }

    public function updatedQuery()
    {
        $this->resetPage();
    }

    public function updatedSelectedRecipes()
    {
        $this->resetPage();
    }
    public function updatedSelectedTechnologies()
    {
        $this->resetPage();
    }


    public function render()
    {
        $products = $this->category->products()
            ->where('is_active', 1)
            ->when($this->query, function ($queryBuilder) {
                $queryBuilder->where('name', 'like', "%{$this->query}%");
            })
            ->when($this->selectedRecipes, function ($queryBuilder) {
                $queryBuilder->whereIn('recipe_id', $this->selectedRecipes);
            })
            ->when($this->selectedTechnologies, function ($queryBuilder) {
                $queryBuilder->whereIn('technology_id', $this->selectedTechnologies);
            })
            ->paginate(9);

        $recipes = Recipe::all();
        $technologies = Technology::all();

        return view('livewire.product-search', [
            // 'products' => $products,
            'products' => $products,
            'recipes' => $recipes,
            'technologies' => $technologies,
        ]);
    }
}
