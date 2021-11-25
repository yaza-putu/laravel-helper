<?php

namespace Yaza\LaravelHelper\Commands;

use Illuminate\Console\Command;

class LaravelHelperCommand extends Command
{
    public $signature = 'laravel-helper';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
