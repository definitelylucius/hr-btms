<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user is authenticated and using the 'manager' guard
        if (auth('admin')->check() && auth('admin')->user()->usertype == 'admin') {
            return $next($request);
        }

        // If the user is not a manager, redirect them to their appropriate dashboard
        return redirect()->route('dashboard');
    }
}