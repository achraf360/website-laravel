<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Technology;

class AdminTechnologiesList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';

    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function deleteTechnology($technologyId)
    {
        $technology = Technology::find($technologyId);
        if ($technology) {
            $technology->delete();
        }
    }

    public function render()
    {
        $technologies = Technology::where('name', 'like', '%' . $this->search . '%')
            ->paginate(10);

        return view('livewire.admin-technologies-list', [
            'technologies' => $technologies,
        ]);
    }
}
