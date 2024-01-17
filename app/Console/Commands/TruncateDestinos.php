<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class TruncateDestinos extends Command
{
    protected $signature = 'truncate:destinos';
    protected $description = 'Borra todos los registros de la tabla destinos';

    public function handle()
    {
        DB::table('destinos')->delete();
        $this->info('Registros de la tabla destinos eliminados correctamente.');
    }
}
