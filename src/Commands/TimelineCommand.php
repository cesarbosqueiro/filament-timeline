<?php

namespace Bosqro\Timeline\Commands;

use Illuminate\Console\Command;

class TimelineCommand extends Command
{
    public $signature = 'timeline';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
