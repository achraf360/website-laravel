<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Category;
use Illuminate\Database\QueryException;

class AdminCategoriesList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';

    public $search = '';
    public $errorMessage = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function deleteCategory($categoryId)
    {
        try {
            $category = Category::find($categoryId);
            if ($category) {
                $category->delete();
            }
        } catch (QueryException $e) {
            $this->errorMessage = 'Cannot delete this category because it is associated with other records.';
        }
    }

    public function clearErrorMessage()
    {
        $this->errorMessage = '';
    }

    public function render()
    {
        $categories = Category::where('name', 'like', '%' . $this->search . '%')
            ->paginate(10);

        return view('livewire.admin-categories-list', [
            'categories' => $categories,
            'errorMessage' => $this->errorMessage,
        ]);
    }
}
