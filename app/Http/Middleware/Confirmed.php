<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;

class Confirmed
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::user()->verified;
        if (!$user) {
            return redirect()->route('confirm');
        }
        return $next($request);
    }
}
