<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->downloadImage('9142');
    }

    private function downloadImage($picture)
    {
        $baseUrl = 'https://retro.dofusbook.net/static/dist/items/';
        $imageUrl = $baseUrl . $picture . '-70.webp';
        $imageName = $picture . '.webp';
        $directory = 'assets/items';

        // Skip if image already exists
        if (Storage::disk('public')->exists($directory . '/' . $imageName)) {
            return;
        }

        // Create directory if it doesn't exist
        if (!Storage::disk('public')->exists($directory)) {
            Storage::disk('public')->makeDirectory($directory, true);
        }

        try {
            $image = file_get_contents($imageUrl);
            if ($image !== false) {
                Storage::disk('public')->put(
                    $directory . '/' . $imageName,
                    $image
                );
                $this->info('Downloaded image: ' . $imageName);
            }
        } catch (\Exception $e) {
            $this->warn(
                'Could not download image: ' .
                    $imageUrl .
                    ' - ' .
                    $e->getMessage()
            );
        }
    }
}
