<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ImportStatCosts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:import-stat-costs {jsonFile : Path al archivo JSON}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Importa los costos de stats desde un archivo JSON';

    /**
     * Execute the console command.
     */

    // Ejemplo de uso:
    // sail artisan app:import-stat-costs path/to/your/file.json

    public function handle()
    {
        $jsonPath = $this->argument('jsonFile');

        if (!File::exists($jsonPath)) {
            $this->error("El archivo JSON no existe: $jsonPath");
            return 1;
        }

        try {
            $statCosts = $this->generateStatCostsFromJson($jsonPath);

            DB::table('stat_costs')->truncate(); // Limpiar antes de insertar
            DB::table('stat_costs')->insert($statCosts);

            $this->info('✅ Costos de stats importados correctamente.');
        } catch (\Exception $e) {
            $this->error(
                '❌ Error al importar los costos de stats: ' . $e->getMessage()
            );
            return 1;
        }

        return 0;
    }

    /**
     * Genera el array de costos desde el archivo JSON.
     */
    private function generateStatCostsFromJson(string $jsonFilePath): array
    {
        $jsonData = File::get($jsonFilePath);
        $rawDataArray = json_decode($jsonData, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new \Exception(
                'Error decodificando el archivo JSON: ' . json_last_error_msg()
            );
        }

        // Mapeo de stat keys a IDs
        $statTypes = [
            'vi' => 1,
            'sa' => 2,
            'fo' => 3,
            'in' => 4,
            'ch' => 5,
            'ag' => 6,
        ];

        $statCosts = [];

        foreach ($rawDataArray['data'] as $raceIndex => $raceData) {
            $raceId = $raceIndex + 1;

            foreach ($raceData as $statKey => $ranges) {
                $statTypeId = $statTypes[$statKey] ?? null;

                if (!$statTypeId) {
                    $this->warn(
                        "⚠️ Stat key desconocido ignorado: '$statKey' en raza $raceId"
                    );
                    continue;
                }

                foreach ($ranges as $range) {
                    [$startStr, $costStr] = explode('-', $range);
                    $start = (int) $startStr;
                    $cost = (int) $costStr;

                    $statCosts[] = [
                        'race_id' => $raceId,
                        'stat_type_id' => $statTypeId,
                        'start' => $start,
                        'cost_per_point' => $cost,
                    ];
                }
            }
        }

        return $statCosts;
    }
}
