<?php

namespace App\Livewire\Equipment\Slots;

use Livewire\Component;
use Livewire\Attributes\Computed;

class CharacterSlots extends Component
{
    #[Computed]
    public function slots()
    {
        return [
            'Amuleto' => [
                'id' => 1,
                'name' => 'Amuleto',
                'category' => 12,
                'img' => '1052.webp',
            ],
            'Escudo' => [
                'id' => 2,
                'name' => 'Escudo',
                'category' => 14,
                'img' => '82020.webp',
            ],
            'Anillo' => [
                'id' => 3,
                'name' => 'Anillo',
                'category' => 13,
                'img' => '9048.webp',
            ],
            'Cinturon' => [
                'id' => 4,
                'name' => 'Cinturon',
                'category' => 15,
                'img' => '10033.webp',
            ],
            'Botas' => [
                'id' => 5,
                'name' => 'Botas',
                'category' => 19,
                'img' => '11032.webp',
            ],
            'Sombrero' => [
                'id' => 6,
                'name' => 'Sombrero',
                'category' => 16,
                'img' => '16044.webp',
            ],
            'Arma' => [
                'id' => 7,
                'name' => 'Arma',
                'category' => null,
                'img' => '7023.webp',
            ],
            'Dofus' => [
                'id' => 8,
                'name' => 'Dofus',
                'category' => 20,
                'img' => '16046.webp',
            ],
            'Capa' => [
                'id' => 9,
                'name' => 'Capa',
                'category' => 17,
                'img' => '17048.webp',
            ],
            'Mascota' => [
                'id' => 10,
                'name' => 'Mascota',
                'category' => 22,
                'img' => '18038.webp',
            ],
            'Idolo' => [
                'id' => 11,
                'name' => 'Idolo',
                'category' => null,
                'img' => '16046.webp',
            ],
            'Dofus Omega' => [
                'id' => 12,
                'name' => 'Dofus Omega',
                'category' => 27,
                'img' => '23023.webp',
            ],
            'Dofus Dolmanax' => [
                'id' => 13,
                'name' => 'Dofus Dolmanax',
                'category' => null,
                'img' => '23018.webp',
            ],
            'Prismarita' => [
                'id' => 14,
                'name' => 'Prismarita',
                'category' => 31,
                'img' => '217001.webp',
            ],
            'Montura' => [
                'id' => 15,
                'name' => 'Montura',
                'category' => 23,
                'img' => '97093.webp',
            ],
        ];
    }

    public function render()
    {
        return view('livewire.equipment.slots.character-slots');
    }
}
