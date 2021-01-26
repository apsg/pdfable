<?php

namespace Apsg\Pdfable\Commands;

use Illuminate\Console\Command;

class PdfableCommand extends Command
{
    public $signature = 'pdfable';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
