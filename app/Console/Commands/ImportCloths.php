<?php

namespace App\Console\Commands;

use App\Models\Cloth;
use App\Models\ClothBonus;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class ImportCloths extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:import-cloths';

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
        $url =
            'https://retro.dofusbook.net/clothes/retro/search?context=cloth&sort=desc';
        $cloths = Http::withHeaders(['X-Lang' => 'es'])
            ->get($url)
            ->json();

        $totalPages = $cloths['pages'];

        $bar = $this->output->createProgressBar($totalPages);
        $bar->start();

        for ($page = 1; $page <= $totalPages; $page++) {
            $cloths = Http::withHeaders(['X-Lang' => 'es'])
                ->get($url . '&page=' . $page)
                ->json()['data'];

            foreach ($cloths as $clothData) {
                Cloth::updateOrCreate(
                    ['id' => $clothData['id']],
                    [
                        'name' => $clothData['name'],
                        'level' => $clothData['level'],
                        'bonus' => $clothData['bonus'],
                        'count_item' => $clothData['count_item'],
                        'cannot_craft' => $clothData['cannot_craft'],
                        'slug' => $clothData['slug'],
                    ]
                );
                if (!empty($clothData['effects'])) {
                    foreach ($clothData['effects'] as $effect) {
                        ClothBonus::updateOrCreate(
                            [
                                'cloth_id' => $clothData['id'],
                                'effect_type_id' => $effect['id'],
                            ],
                            [
                                'count' => $effect['count'],
                                'value' => $effect['value'],
                                'emote' => $effect['emote'],
                                'title' => $effect['title'],
                                'spell' => $effect['spell'],
                                'spell_description' => $effect['spellDesc'],
                            ]
                        );
                    }
                }
            }
            $bar->advance();
        }

        $bar->finish();
        $this->newLine(2);
        $this->info('✅ Cloths importados exitosamente!');
    }
}
