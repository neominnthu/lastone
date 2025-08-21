<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Warranty;

class WarrantyTable extends Component
{
    public $search = '';
    public $sortField = 'id';
    public $sortDirection = 'asc';

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortField = $field;
            $this->sortDirection = 'asc';
        }
    }

    public function render()
    {
        $warranties = Warranty::query()
            ->where('status', 'like', '%'.$this->search.'%')
            ->orderBy($this->sortField, $this->sortDirection)
            ->get();
        return view('livewire.warranty-table', compact('warranties'));
    }
}
