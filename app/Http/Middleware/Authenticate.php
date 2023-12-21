<?php

// app/Http/Middleware/Authenticate.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $guard = null)
    {
        if (!Auth::guard($guard)->check()) {
            // If the user is not authenticated, allow them to proceed to the login page
            return $request->is('login') ? redirect()->route('welcome') : redirect()->route('login');
        }

        // Check if the authenticated user has a role and perform role-based redirection
        switch (auth()->user()->role) {
            case 'evaluator':
                return redirect()->route('evaluator.dashboard');
            case 'fyp_group':
                return redirect()->route('fypgroup.dashboard');
            case 'admin':
                return redirect()->route('admin.dashboard');
            default:
                return redirect()->route('welcome'); // Default redirect
        }        
    }
}

