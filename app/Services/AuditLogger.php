<?php
namespace App\Services;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class AuditLogger
{
    public static function log(string $action, array $details = [])
    {
        $user = Auth::user();
        Log::channel('audit')->info('AUDIT', [
            'user_id' => $user ? $user->id : null,
            'action' => $action,
            'details' => $details,
            'timestamp' => now()->toDateTimeString(),
        ]);
    }
}
