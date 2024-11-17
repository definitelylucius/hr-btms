<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Manager
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user is authenticated and using the 'manager' guard
        if (auth('manager')->check() && auth('manager')->user()->usertype == 'manager') {
            return $next($request);
        }

        // If the user is not a manager, redirect them to their appropriate dashboard
        return redirect()->route('dashboard');
    }
}
