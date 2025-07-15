<?php

namespace App\Livewire\Equipment\Stats;

use Livewire\Component;

class StatsList extends Component
{
    public $stats;

    public function render()
    {
        return view('livewire.equipment.stats.stats-list');
    }
}
