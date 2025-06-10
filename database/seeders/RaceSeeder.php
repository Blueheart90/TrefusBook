<?php

namespace Database\Seeders;

use App\Models\Race;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $races = [
            [
                'id' => 1,
                'name' => 'Feca',
                'slug' => 'feca',
                'picture' => 'icon-feca',
            ],
            [
                'id' => 2,
                'name' => 'Osamodas',
                'slug' => 'osamodas',
                'picture' => 'icon-osamodas',
            ],
            [
                'id' => 3,
                'name' => 'Anutrof',
                'slug' => 'anutrof',
                'picture' => 'icon-anutrof',
            ],
            [
                'id' => 4,
                'name' => 'Sram',
                'slug' => 'sram',
                'picture' => 'icon-sram',
            ],
            [
                'id' => 5,
                'name' => 'Xelor',
                'slug' => 'xelor',
                'picture' => 'icon-xelor',
            ],
            [
                'id' => 6,
                'name' => 'Zurcarák',
                'slug' => 'ecaflip',
                'picture' => 'icon-ecaflip',
            ],
            [
                'id' => 7,
                'name' => 'Aniripsa',
                'slug' => 'eniripsa',
                'picture' => 'icon-eniripsa',
            ],
            [
                'id' => 8,
                'name' => 'Yopuka',
                'slug' => 'iop',
                'picture' => 'icon-iop',
            ],
            [
                'id' => 9,
                'name' => 'Ocra',
                'slug' => 'cra',
                'picture' => 'icon-cra',
            ],
            [
                'id' => 10,
                'name' => 'Sadida',
                'slug' => 'sadida',
                'picture' => 'icon-sadida',
            ],
            [
                'id' => 11,
                'name' => 'Sacrógrito',
                'slug' => 'sacrieur',
                'picture' => 'icon-sacrieur',
            ],
            [
                'id' => 12,
                'name' => 'Pandawa',
                'slug' => 'pandawa',
                'picture' => 'icon-pandawa',
            ],
        ];

        foreach ($races as $race) {
            Race::updateOrCreate(['id' => $race['id']], $race);
        }
    }
}
