<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class CheckSessionExpiration
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $sessionId = $request->session()->getId();

        $session = DB::table('sessions')->where('id', $sessionId)->first();

        if ($session) {
            $lastActivity = Carbon::createFromTimestamp($session->last_activity);
            if ($lastActivity->diffInMinutes(Carbon::now()) > 60) {
                DB::table('sessions')->where('id', $sessionId)->delete();

                return redirect()->route('login')->with('error_message', 'Session expired. Please log in again.');
            }
        }

        return $next($request);
    }
}
