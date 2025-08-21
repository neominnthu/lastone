<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RedirectToRoleDashboard
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            $role = Auth::user()->roles->pluck('name')->first();
            $targetRouteName = 'dashboard';
            $currentRouteName = $request->route() ? $request->route()->getName() : null;
            if ($currentRouteName !== $targetRouteName) {
                return redirect()->route($targetRouteName);
            }
        }
        return $next($request);
    }
}
