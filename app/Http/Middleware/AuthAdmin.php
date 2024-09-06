<?php

namespace App\Http\Middleware;





namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            if (Auth::user()->type === "ADM") {
                return $next($request);
            } else {
                Session::flash('error', 'You do not have admin access.');
                return redirect()->route('home.index');
            }
        } else {
            return redirect()->route('login');
        }
    }
}