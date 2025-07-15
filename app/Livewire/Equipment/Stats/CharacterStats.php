<?php

namespace App\Livewire\Equipment\Stats;

use Livewire\Attributes\Computed;
use Livewire\Component;

class CharacterStats extends Component
{
    #[Computed]
    public function stats()
    {
        return [
            [
                'icon' => 'vi',
                'title' => 'Vitalidad',
                'value' => $this->calculateStat('vitality'),
                'color' => 'text-red-500',
                // 'baseValue' => $this->character->base_vitality,
            ],
            [
                'icon' => 'sab',
                'title' => 'Sabiduría',
                'value' => $this->calculateStat('wisdom'),
                'color' => 'text-violet-500',
                // 'baseValue' => $this->character->base_wisdom,
            ],
            [
                'icon' => 'pp',
                'title' => 'Prospección',
                'value' => $this->calculateStat('prospection'),
                'color' => 'text-sky-500',
                // 'baseValue' => $this->character->base_intelligence,
            ],
            [
                'icon' => 'pm',
                'title' => 'PM',
                'value' => $this->calculateStat('pm'),
                'color' => 'text-emerald-500',
                // 'baseValue' => $this->character->base_pm,
            ],
            [
                'icon' => 'pa',
                'title' => 'PA',
                'value' => $this->calculateStat('pa'),
                'color' => 'text-yellow-500',
                // 'baseValue' => $this->character->base_pa,
            ],
            [
                'icon' => 'invo',
                'title' => 'Invocaciones',
                'value' => $this->calculateStat('invocations'),
                'color' => 'text-blue-500',
                // 'baseValue' => $this->character->base_invocations,
            ],
            [
                'icon' => 'inte',
                'title' => 'Inteligencia',
                'value' => $this->calculateStat('int'),
                'color' => 'text-red-500',
                // 'baseValue' => $this->character->base_int,
            ],
            [
                'icon' => 'ini',
                'title' => 'Iniciativa',
                'value' => $this->calculateStat('ini'),
                'color' => 'text-purple-500',
                // 'baseValue' => $this->character->base_ini,
            ],
            [
                'icon' => 'gc',
                'title' => 'Golpes Críticos',
                'value' => $this->calculateStat('gc'),
                'color' => 'text-red-500',
                // 'baseValue' => $this->character->base_gc,
            ],
            [
                'icon' => 'fo',
                'title' => 'Fuerza',
                'value' => $this->calculateStat('fo'),
                'color' => 'text-yellow-800',
                // 'baseValue' => $this->character->base_fo,
            ],
            [
                'icon' => 'dmg',
                'title' => '% Daño',
                'value' => $this->calculateStat('dmg'),
                'color' => 'text-yellow-500',
                //'baseValue' => $this->character->base_dmg,
            ],
            [
                'icon' => 'curas',
                'title' => 'Curas',
                'value' => $this->calculateStat('curas'),
                'color' => 'text-red-500',
                //'baseValue' => $this->character->base_curas,
            ],
            [
                'icon' => 'cha',
                'title' => 'Suerte',
                'value' => $this->calculateStat('cha'),
                'color' => 'text-blue-500',
                //'baseValue' => $this->character->base_cha,
            ],
            [
                'icon' => 'al',
                'title' => 'Alcance',
                'value' => $this->calculateStat('al'),
                'color' => 'text-emerald-500',
                //'baseValue' => $this->character->base_al,
            ],
            [
                'icon' => 'agi',
                'title' => 'Agilidad',
                'value' => $this->calculateStat('agi'),
                'color' => 'text-emerald-500',
                //'baseValue' => $this->character->base_agi,
            ],
        ];
    }

    private function calculateStat(string $statName): int
    {
        // $baseValue = $this->character->{"base_$statName"} ?? 0;
        // $itemBonus = 0;

        // foreach ($this->equippedItems as $item) {
        //     $itemBonus += $item->stats[$statName] ?? 0;
        // }

        // return $baseValue + $itemBonus;
        return 0;
    }
    public function render()
    {
        return view('livewire.equipment.stats.character-stats');
    }
}
