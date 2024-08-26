<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Test extends Command
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
        $array = [
          'pepe1' => 'pape1',
            'pepe2' => 'pape2',
            'pepe3' => 'pape3',
            'pepe4' => 'pape4',
            'pepe5' => 'pape5',
        ];

        foreach ($array as $item=>$key){
            $this->error($array[0]);
        }
    }
}
