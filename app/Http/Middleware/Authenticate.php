<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Support\Facades\Auth;


class Authenticate 
{
    
    public function handle($request, Closure $next, $guard = null)
    {
        if (!Auth::guard($guard)->check()) {

             return redirect()->route('public.auth.login', ['language'=>'fr']);
        }

        Auth::shouldUse($guard);
    
        if (Auth::user() instanceof User) {
        
            if (Auth::user()->email_verified_at != null && (request()->is('email/verify/*') || request()->is('email/verify'))) {
                return redirect()->route('auth.success', ['language'=>'fr']);
            }
        }

        return $next($request);
    }
}
