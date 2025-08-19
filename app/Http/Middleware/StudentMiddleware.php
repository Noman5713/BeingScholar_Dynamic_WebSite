<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('student.login.form');
        }

        if (!Auth::user()->isStudent()) {
            Auth::logout();
            return redirect()->route('student.login.form')->withErrors([
                'email' => 'You do not have student privileges.',
            ]);
        }

        return $next($request);
    }
}
