<?php

namespace App\Livewire\Equipment\Slots;

use Livewire\Component;

class SlotList extends Component
{
    public $slots;

    public function render()
    {
        return view('livewire.equipment.slots.slot-list');
    }
}
