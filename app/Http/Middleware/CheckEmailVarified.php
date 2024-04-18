<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckEmailVarified
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            // Check if the user's email is verified
            if (Auth::user()->email_verified_at === null) {
                // Redirect to email verification route
                return redirect()->route('email.verify');
            }
        }

        // Continue with the request
        return $next($request);
    }
}
