<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ImportAllData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:import-all-data';

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
        $this->info('Iniciando importación de datos...');

        $this->call('app:import-cloths');
        $this->newLine();
        $this->call('app:import-items');
        $this->newLine();
        $this->call('app:import-weapons');
        $this->newLine();
        $this->call('app:import-spells');

        $this->info('✅ Importación completada exitosamente!');
    }
}
