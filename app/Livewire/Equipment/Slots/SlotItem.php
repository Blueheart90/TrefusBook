<?php

namespace App\Livewire\Equipment\Slots;

use Livewire\Component;

class SlotItem extends Component
{
    public $size;
    public $bgImage;
    public $category;
    public $name;
    public $equipped;

    public function render()
    {
        return view('livewire.equipment.slots.slot-item');
    }
}
