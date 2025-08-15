<?php

namespace App\Livewire\Equipment\Slots;

use Livewire\Component;
use Livewire\Attributes\On;

use Illuminate\Support\Facades\Log;
use App\Models\Item; // Asegúrate de que este sea el modelo correcto para tus ítems

class ItemModal extends Component
{
    public $showModal = true;
    public $category = 12;
    public $name = 'Dofus';
    public $search;
    public $levelStart = 1;
    public $levelEnd = 200;
    public $items = [];
    public $order = true;

    public function mount()
    {
        $this->loadItems();
    }
    #[On('show-item-modal')]
    public function showModal($category, $name)
    {
        $this->category = $category;
        $this->name = $name;
        $this->search = '';
        $this->levelStart = 1;
        $this->levelEnd = 200;
        $this->order = true;
        $this->loadItems();
        $this->showModal = true;
    }

    private function loadItems()
    {
        $query = Item::query();

        if ($this->category) {
            $query->where('category_id', $this->category);
        }

        if ($this->search) {
            $query->where('name', 'like', '%' . $this->search . '%');
        }

        if ($this->levelStart && $this->levelEnd) {
            $query->whereBetween('level', [$this->levelStart, $this->levelEnd]);
        }

        if ($this->order) {
            $query->orderBy('level', 'asc');
        } else {
            $query->orderBy('level', 'desc');
        }

        $this->items = $query->with(['effects.effectType', 'cloth'])->get();
    }

    public function updatedSearch()
    {
        $this->loadItems();
    }

    public function updatedLevelStart()
    {
        $this->loadItems();
    }

    public function updatedLevelEnd()
    {
        $this->loadItems();
    }

    public function toggleOrder()
    {
        $this->order = !$this->order;
        $this->loadItems();
    }

    #[On('close-item-modal')]
    public function closeModal()
    {
        $this->showModal = false;
    }

    public function render()
    {
        return view('livewire.equipment.slots.item-modal');
    }
}
