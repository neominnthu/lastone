<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class AuditLogList extends Command
{
    protected $signature = 'audit:log {--tail=50 : Number of lines to show from the end}';
    protected $description = 'Show recent audit log entries';

    public function handle()
    {
        $file = storage_path('logs/audit.log');
        if (!file_exists($file)) {
            $this->error('No audit log found.');
            return 1;
        }
        $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $tail = (int) $this->option('tail');
        $lines = array_slice($lines, -$tail);
        foreach ($lines as $line) {
            $this->line($line);
        }
        return 0;
    }
}
