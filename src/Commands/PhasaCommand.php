<?php

namespace Zupaazhai\Phasa\Commands;

use Illuminate\Console\Command;

class PhasaCommand extends Command
{
    public $signature = 'phasa';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
