<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards): Response
    {
        // Loop through each guard and check authentication
        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                // Redirect authenticated users based on guard
                return redirect($this->redirectTo($guard));
            }
        }

        return $next($request);
    }

    /**
     * Determine the redirect path based on guard.
     *
     * @param  string  $guard
     * @return string
     */
    protected function redirectTo(string $guard): string
    {
        switch ($guard) {
            case 'admin':
                return '/admin';
            default:
                return '/';
        }
    }
}
