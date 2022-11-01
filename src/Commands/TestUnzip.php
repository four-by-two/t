<?php

namespace Wainwright\CasinoDog\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Filesystem\Filesystem;
use Symfony\Component\Process\Process;
class TestUnzip extends Command
{
    protected $signature = 'casino-dog:test-unzip';
    public $description = 'Auto config the casino dog variables (where applicable).';

    public function handle()
    {

    }
}
