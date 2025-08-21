<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Inventory;

class InventoryTable extends Component
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
        $inventories = Inventory::query()
            ->where('location', 'like', '%'.$this->search.'%')
            ->orderBy($this->sortField, $this->sortDirection)
            ->get();
        return view('livewire.inventory-table', compact('inventories'));
    }
}
