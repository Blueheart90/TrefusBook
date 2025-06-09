<?php

namespace App\Console\Commands;

use App\Models\Item;
use App\Models\EffectType;
use App\Models\ItemEffect;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class ImportItems extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:import-items';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */

    // Al inicio de la clase, agrega estas constantes
    const MAX_RETRIES = 3; // Número máximo de reintentos
    const RETRY_DELAY = 5; // Segundos a esperar entre reintentos
    const TIMEOUT = 90; // Tiempo de espera en segundos

    // Luego, modifica la función que hace las peticiones HTTP
    private function fetchWithRetry($url, $attempt = 1)
    {
        try {
            $response = Http::timeout(self::TIMEOUT)
                ->withHeaders(['X-Lang' => 'es'])
                ->get($url);

            if ($response->successful()) {
                return $response->json();
            }

            throw new \Exception('HTTP Error: ' . $response->status());
        } catch (\Exception $e) {
            if ($attempt >= self::MAX_RETRIES) {
                throw $e;
            }

            $this->warn(
                "Reintentando ({$attempt}/" .
                    (self::MAX_RETRIES - 1) .
                    ') - ' .
                    $e->getMessage()
            );
            sleep(self::RETRY_DELAY * $attempt); // Backoff exponencial

            return $this->fetchWithRetry($url, $attempt + 1);
        }
    }
    public function handle()
    {
        $baseUrl =
            'https://retro.dofusbook.net/items/retro/search/equipment?context=item&sort=desc';

        $firstPage = $this->fetchWithRetry($baseUrl . '&page=1');
        $totalPages = $firstPage['pages'];

        $this->info("Importando $totalPages páginas de items...");

        $bar = $this->output->createProgressBar($totalPages);
        $bar->start();

        for ($page = 1; $page <= $totalPages; $page++) {
            try {
                $items = $this->fetchWithRetry($baseUrl . '&page=' . $page)[
                    'data'
                ];
                foreach ($items as $item) {
                    $itemDb = Item::updateOrCreate(
                        ['id' => $item['id']],
                        [
                            'official_id' => $item['id'],
                            'name' => $item['name'],
                            'information' => $item['information'],
                            'slug' => $item['slug'],
                            'level' => $item['level'],
                            'picture' => $item['picture'],
                            'category_id' => $item['category_id'],
                            'cloth_id' => $item['cloth_id'],
                            'choose_effect' => $item['choose_effect'],
                            'give_boost' => $item['give_boost'],
                            'cannot_fm' => $item['cannot_fm'],
                            'swf' => $item['swf'],
                            'harness' => $item['harness'],
                            'main_color1' => $item['main_color1'],
                            'main_color2' => $item['main_color2'],
                            'main_color3' => $item['main_color3'],
                            'png_color1' => $item['png_color1'],
                            'png_color2' => $item['png_color2'],
                            'png_color3' => $item['png_color3'],
                            'size' => $item['size'],
                            'cameleon' => $item['cameleon'],
                        ]
                    );

                    if (!empty($item['effects'])) {
                        foreach ($item['effects'] as $effect) {
                            // verificar si el effect_type existe, si no , crearlo
                            EffectType::updateOrCreate(
                                ['id' => $effect['id']],
                                [
                                    'value' => $effect['name'],
                                    'display_name' => 'spell',
                                    'type' => $effect['type'],
                                ]
                            );
                            ItemEffect::updateOrCreate(
                                [
                                    'item_id' => $itemDb->id,
                                    'effect_type_id' => $effect['id'],
                                ],
                                [
                                    'min_value' => $effect['min'],
                                    'max_value' => $effect['max'],
                                    'emote' => $effect['emote'],
                                    'title' => $effect['title'],
                                    'spell' => $effect['spell'],
                                    'spell_description' => $effect['spellDesc'],
                                ]
                            );
                        }
                    }
                }

                // Mostrar progreso
                $bar->advance();

                if ($page < $totalPages) {
                    sleep(1); // 1 segundo entre peticiones
                }
            } catch (\Exception $e) {
                $this->error("Error en la página $page: " . $e->getMessage());
                // Esperar 5 segundos antes de reintentar
                sleep(5);
                continue;
            }
        }

        $bar->finish();
        $this->newLine(2);
        $this->info('¡Importación completada con éxito!');
    }
}
