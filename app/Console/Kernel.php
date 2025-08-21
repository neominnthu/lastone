<?php
namespace App\Console;

use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected $commands = [
        \App\Console\Commands\AuditLogList::class,
    ];

    protected function schedule($schedule)
    {
        // ...existing code...
    }

    protected function commands()
    {
        $this->load(__DIR__.'/Commands');
    }
}
