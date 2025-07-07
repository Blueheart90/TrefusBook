<?php

namespace App\Livewire\Equipment\Stats;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class StatItem extends Component
{
    public $title;
    public $value;
    public $icon;

    public function render()
    {
        return view('livewire.equipment.stats.stat-item');
    }
}
