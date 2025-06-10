<?php

namespace Database\Seeders;

use App\Models\StatType;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StatTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statTypes = [
            [
                'id' => 1,
                'value' => 'vi',
                'display_name' => 'Vitalidad',
                'icon' => 'icon-vi',
            ],
            [
                'id' => 2,
                'value' => 'sa',
                'display_name' => 'Sabiduría',
                'icon' => 'icon-sa',
            ],
            [
                'id' => 3,
                'value' => 'fo',
                'display_name' => 'Fuerza',
                'icon' => 'icon-fo',
            ],
            [
                'id' => 4,
                'value' => 'in',
                'display_name' => 'Inteligencia',
                'icon' => 'icon-in',
            ],
            [
                'id' => 5,
                'value' => 'ch',
                'display_name' => 'Suerte',
                'icon' => 'icon-ch',
            ],
            [
                'id' => 6,
                'value' => 'ag',
                'display_name' => 'Agilidad',
                'icon' => 'icon-ag',
            ],
        ];

        foreach ($statTypes as $statType) {
            StatType::updateOrCreate(['id' => $statType['id']], $statType);
        }
    }
}
