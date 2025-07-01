<?php

namespace App\Console\Commands;

use App\Models\Spell;
use App\Models\EffectType;
use App\Models\SpellLevel;
use App\Models\SpellEffect;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class ImportSpells extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:import-spells';

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
        $baseUrl = 'https://retro.dofusbook.net/spells/class/';

        $totalRaces = 12;

        $this->info("Importando $totalRaces razas...");

        $bar = $this->output->createProgressBar($totalRaces);
        $bar->start();

        $effectTypesArr = EffectType::pluck('id', 'value')->toArray();

        for ($race = 1; $race <= $totalRaces; $race++) {
            try {
                $spells = $this->fetchWithRetry($baseUrl . $race);
                // dd($spells);

                foreach ($spells as $spell) {
                    $this->info("Importando hechizo {$spell['name']}...");
                    Spell::updateOrCreate(
                        ['id' => $spell['id']],
                        [
                            'race_id' => $spell['class_id'],
                            'is_variante' => $spell['is_variante'],
                            'is_passif' => $spell['is_passif'],
                            'is_invoc' => $spell['is_invoc'],
                            'name' => $spell['name'],
                            'picture' => $spell['picture'] ?? null,
                            'description' => $spell['description'],
                        ]
                    );

                    if (!empty($spell['caracs'])) {
                        foreach ($spell['caracs'] as $loop => $carac) {
                            SpellLevel::updateOrCreate(
                                [
                                    'spell_id' => $spell['id'],
                                    'level' => $loop + 1,
                                ],
                                [
                                    'pa_cost' => $carac['pa'] ?? 2,
                                    'po' => $carac['po'] ?? null,
                                    'cc' => $carac['cc'] ?? null,
                                    'cc_rate' => $carac['cc_rate'] ?? null,
                                    'ir' => $carac['ir'] ?? null,
                                    'ldv' => $carac['ldv'] ?? null,
                                    'ltj' => $carac['ltj'] ?? null,
                                    'pb' => $carac['pb'] ?? null,
                                    'lel' => $carac['lel'] ?? null,
                                    'lt' => $carac['lt'] ?? null,
                                ]
                            );
                        }
                    }

                    if (!empty($spell['groups'])) {
                        foreach ($spell['groups'] as $group) {
                            foreach ($group['effects'] as $effect) {
                                SpellEffect::updateOrCreate(
                                    [
                                        'id' => $effect['id'],
                                        'spell_id' => $spell['id'],
                                    ],
                                    [
                                        'spell_level_id' => $group['level'],
                                        'effect_type_id' =>
                                            $effectTypesArr[$effect['effect']],
                                        'title' => $group['title'],
                                        'min' => $effect['min'],
                                        'max' => $effect['max'],
                                        'cc' => $effect['cc'],
                                        'duration' => $effect['duration'],
                                    ]
                                );
                            }
                        }
                    }
                }
            } catch (\Exception $e) {
                $this->error(
                    "Error al importar raza $race: " . $e->getMessage()
                );
            }
        }
        $bar->finish();
    }
}
