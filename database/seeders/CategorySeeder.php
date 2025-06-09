<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'id' => 15,
                'value' => 'ce',
                'name' => 'Cinturón',
                'type' => 'E',
            ],
            [
                'id' => 12,
                'value' => 'am',
                'name' => 'Amuleto',
                'type' => 'E',
            ],
            [
                'id' => 13,
                'value' => 'an',
                'name' => 'Anillo',
                'type' => 'E',
            ],
            [
                'id' => 18,
                'value' => 'bp',
                'name' => 'Mochila',
                'type' => 'E',
            ],
            [
                'id' => 19,
                'value' => 'bo',
                'name' => 'Botas',
                'type' => 'E',
            ],
            [
                'id' => 14,
                'value' => 'br',
                'name' => 'Escudo',
                'type' => 'E',
            ],
            [
                'id' => 17,
                'value' => 'ca',
                'name' => 'Capa',
                'type' => 'E',
            ],
            [
                'id' => 16,
                'value' => 'ch',
                'name' => 'Sombrero',
                'type' => 'E',
            ],
            [
                'id' => 20,
                'value' => 'do',
                'name' => 'Dofus',
                'type' => 'E',
            ],
            [
                'id' => 21,
                'value' => 'tr',
                'name' => 'Trofeo',
                'type' => 'E',
            ],
            [
                'id' => 31,
                'value' => 'pr',
                'name' => 'Prismarita',
                'type' => 'E',
            ],
            [
                'id' => 22,
                'value' => 'fa',
                'name' => 'Mascota',
                'type' => 'E',
            ],
            [
                'id' => 24,
                'value' => 'mt',
                'name' => 'Mascotura',
                'type' => 'E',
            ],
            [
                'id' => 23,
                'value' => 'mo',
                'name' => 'Montura',
                'type' => 'E',
            ],
            [
                'id' => 25,
                'value' => 'mu',
                'name' => 'Mulagua',
                'type' => 'E',
            ],
            [
                'id' => 26,
                'value' => 'vo',
                'name' => 'Vueloceronte',
                'type' => 'E',
            ],
        ];

        foreach ($categories as $category) {
            Category::updateOrCreate(['id' => $category['id']], $category);
        }
    }
}
