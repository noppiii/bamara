<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckoutMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $isAuthenticated = $request->session()->get('authenticate', false);

        if (!$isAuthenticated) {
            return redirect()->route('login')->with('error_message', 'You must be logged in.');
        }

        return $next($request);
    }
}
