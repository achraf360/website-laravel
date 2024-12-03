<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Category;

class AdminCategoriesList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';

    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function deleteCategory($categoryId)
    {
        $category = Category::find($categoryId);
        if ($category) {
            $category->delete();
        }
    }

    public function render()
    {
        $categories = Category::where('name', 'like', '%' . $this->search . '%')
            ->paginate(10);

        return view('livewire.admin-categories-list', [
            'categories' => $categories,
        ]);
    }
}
