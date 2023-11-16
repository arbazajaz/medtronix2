<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        $user = Auth::user();

        // if ($user && $user->role == $role) {
        //     return $next($request);
        // }

        if ($role == 'admin' && $user->isAdmin()) {
            return $next($request);
        }

        return abort(403); // Or you can redirect to a different page for unauthorized access
    }
}
