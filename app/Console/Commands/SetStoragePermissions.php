<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SetStoragePermissions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:set-storage-permissions';

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
        $this->info('Postavljanje dozvola za storage direktorijum...');

        // Promeni dozvole za storage direktorijum
        exec('chmod -R 775 storage');
        exec('chown -R www-data:www-data storage');

        $this->info('Dozvole su postavljene.');
    }
}
