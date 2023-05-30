<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class RolesChecker
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        $user = Auth::user();

        foreach ($roles as $role) {
            /* Checking if the user has the role that is passed in. */
            if ($user->role->guard == $role)
                return $next($request);
        }
        if ($user->role->guard == 'student') {
            return redirect()->route('student.project.home');
        } elseif ($user->role->guard == 'teacher') {
            return redirect()->route('teacher.project.home');
        } elseif ($user->role->guard == 'admin') {
            return redirect()->route('home');
        } else {
            return redirect()->route('auth.logout');
        }
    }
}
