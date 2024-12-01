<?php

namespace App\Livewire;

use Livewire\Component;

class SearchBar extends Component
{
    public $search = '';
    public function mount()
    {
        $this->search = "Rendered";
    }

    public function render()
    {

        return view('livewire.search-bar', [
            'search' => $this->search,
        ]);
    }
}
