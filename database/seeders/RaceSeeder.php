<?php

namespace Database\Seeders;

use App\Models\Race;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
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
                'picture' => '1-0.png',
            ],
            [
                'id' => 2,
                'name' => 'Osamodas',
                'slug' => 'osamodas',
                'picture' => '2-0.png',
            ],
            [
                'id' => 3,
                'name' => 'Anutrof',
                'slug' => 'anutrof',
                'picture' => '3-0.png',
            ],
            [
                'id' => 4,
                'name' => 'Sram',
                'slug' => 'sram',
                'picture' => '4-0.png',
            ],
            [
                'id' => 5,
                'name' => 'Xelor',
                'slug' => 'xelor',
                'picture' => '5-0.png',
            ],
            [
                'id' => 6,
                'name' => 'Zurcarák',
                'slug' => 'ecaflip',
                'picture' => '6-0.png',
            ],
            [
                'id' => 7,
                'name' => 'Aniripsa',
                'slug' => 'eniripsa',
                'picture' => '7-0.png',
            ],
            [
                'id' => 8,
                'name' => 'Yopuka',
                'slug' => 'iop',
                'picture' => '8-0.png',
            ],
            [
                'id' => 9,
                'name' => 'Ocra',
                'slug' => 'cra',
                'picture' => '9-0.png',
            ],
            [
                'id' => 10,
                'name' => 'Sadida',
                'slug' => 'sadida',
                'picture' => '10-0.png',
            ],
            [
                'id' => 11,
                'name' => 'Sacrógrito',
                'slug' => 'sacrieur',
                'picture' => '11-0.png',
            ],
            [
                'id' => 12,
                'name' => 'Pandawa',
                'slug' => 'pandawa',
                'picture' => '12-0.png',
            ],
        ];

        foreach ($races as $race) {
            Race::updateOrCreate(['id' => $race['id']], $race);
            $this->downloadImage(
                'https://retro.dofusbook.net/assets/img/characters/retro/' .
                    $race['picture'],
                'assets/races'
            );
        }
    }

    private function downloadImage($url, $directory)
    {
        $imageName = basename($url);

        // Skip if image already exists
        if (Storage::disk('public')->exists($directory . '/' . $imageName)) {
            return;
        }

        // Create directory if it doesn't exist
        if (!Storage::disk('public')->exists($directory)) {
            Storage::disk('public')->makeDirectory($directory, true);
        }

        try {
            $image = file_get_contents($url);
            if ($image !== false) {
                Storage::disk('public')->put(
                    $directory . '/' . $imageName,
                    $image
                );
            }
        } catch (\Exception $e) {
            Log::error(
                'Could not download image: ' . $url . ' - ' . $e->getMessage()
            );
        }
    }
}
