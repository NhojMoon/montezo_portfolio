<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation;

class RoleChecker
{
    public function handle(Request $request, Closure $next, $role)
    {
        if (!$request->user()) {
            return redirect()->route('login');
        }

        // Check if the user has the required role
        if (!$request->user()->isAdmin($role)) {
            abort(403, 'Unauthorized Action is not allowed!!');
        }

        return $next($request);
    }
    
}