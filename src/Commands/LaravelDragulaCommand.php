<?php

namespace Authanram\LaravelDragula\Commands;

use Illuminate\Console\Command;

class LaravelDragulaCommand extends Command
{
    public $signature = 'laravel-dragula';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
