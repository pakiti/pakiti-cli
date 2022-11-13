<?php

namespace App\Commands;

use LaravelZero\Framework\Commands\Command;
use function Termwind\{render};

class NewCommand extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'new {name=Artisan}';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Make new package or project';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        render(<<<'HTML'
            <div class="py-1 ml-2">
                <div class="px-1 bg-blue-300 text-black">Pakiti</div>
                <em class="ml-1">
                  Simplicity is the ultimate sophistication.
                </em>
            </div>
        HTML);
    }
}
