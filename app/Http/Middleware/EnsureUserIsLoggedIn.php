<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


//Custom Import
use Illuminate\Support\Facades\Auth;

class EnsureUserIsLoggedIn
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //If user isnt logged in, redirect back to Login page
        dd('TestCode MiddlewareSets');
        //Next Success Request
        return $next($request);
    }
}
