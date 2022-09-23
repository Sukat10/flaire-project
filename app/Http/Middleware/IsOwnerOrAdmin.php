<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class IsOwnerOrAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (
            Auth::user() &&  (Auth::user()->id === $request->user_id || Auth::user()->id === $request->user->id ||
                Auth::user()->role === "admin")
        ) {
            return $next($request);
        }

        return Auth::user() &&  Auth::user()->role ? redirect()->back() : redirect('/login');
    }
}
