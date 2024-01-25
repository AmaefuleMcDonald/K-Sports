<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle($request, Closure $next, $role)
    {
        if (!Auth::check() || Auth::user()->role !== $role) {
            // Redirect to a specific route or show an error
            return redirect('/'); // Redirect to home or any other route
        }

        return $next($request);
    }
}

