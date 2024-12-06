<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Recipe;
use Illuminate\Database\QueryException;

class AdminRecipesList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';

    public $search = '';
    public $errorMessage = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function deleteRecipe($recipeId)
    {
        try {
            $recipe = Recipe::find($recipeId);
            if ($recipe) {
                $recipe->delete();
            }
        } catch (QueryException $e) {
            $this->errorMessage = 'Cannot delete this recipe because it is associated with other records.';
        }
    }

    public function clearErrorMessage()
    {
        $this->errorMessage = '';
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
