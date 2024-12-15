<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
{
    public function handle($request, Closure $next)
    {
        $user = Auth::user();

        // Cek apakah pengguna adalah admin
        if ($user->is_admin === 'yes') {
            return $next($request);
        }

        // Jika pengguna bukan admin, arahkan ke dashboard pengguna
        return redirect()->route('dashboard');
    }
}
