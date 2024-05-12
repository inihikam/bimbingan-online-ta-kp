<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        $user = auth()->user();

        if (in_array($user->roles, $roles)) {
            return $next($request);
        }

        if ($user->roles == 'mahasiswa') {
            return redirect()->route('mahasiswa-dashboard');
        } elseif ($user->roles == 'dosen') {
            return redirect()->route('dosen-dashboard');
        }

        return redirect()->route('login');
    }
}
