<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Technology;
use Illuminate\Database\QueryException;

class AdminTechnologiesList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';

    public $search = '';
    public $errorMessage = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function deleteTechnology($technologyId)
    {
        try {
            $technology = Technology::find($technologyId);
            if ($technology) {
                $technology->delete();
            }
        } catch (QueryException $e) {
            $this->errorMessage = 'Cannot delete this technology because it is associated with other records.';
        }
    }

    public function clearErrorMessage()
    {
        $this->errorMessage = '';
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
