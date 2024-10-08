<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        $isAuthenticated = $request->session()->get('authenticate', false);


        if (!$isAuthenticated) {
            return redirect()->route('login')->with('error_message', 'You must be logged in.');
        }

        $userRole = $request->session()->get('user_role');

        if ($userRole !== $role) {
            return redirect()->route('login')->with('error_message', 'You do not have access to this resource.');
        }

        return $next($request);
    }
}
