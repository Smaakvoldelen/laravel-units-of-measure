<?php

namespace Smaakvoldelen\Units\Commands;

use Illuminate\Console\Command;

class UnitsCommand extends Command
{
    public $signature = 'laravel-unit-of-measure';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
