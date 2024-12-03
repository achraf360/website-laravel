<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Recipe;

class AdminRecipesList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';

    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function deleteRecipe($recipeId)
    {
        $recipe = Recipe::find($recipeId);
        if ($recipe) {
            $recipe->delete();
        }
    }

    public function render()
    {
        $recipes = Recipe::where('name', 'like', '%' . $this->search . '%')
            ->paginate(10);

        return view('livewire.admin-recipes-list', [
            'recipes' => $recipes,
        ]);
    }
}
