<?php

namespace App\Console\Commands;

use App\Http\Controllers\MovieController;
use Illuminate\Console\Command;

class fetch extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fetch:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

         MovieController::insert_script();
        $this->info("Your fecth the movies");
        return Command::SUCCESS;
    }
}
