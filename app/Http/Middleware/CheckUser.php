<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckUser
{
    public function handle($request, Closure $next)
    {
        $user = Auth::user();

        // Cek apakah pengguna bukan admin
        if ($user->is_admin === 'no') {
            return $next($request);
        }

        // Jika pengguna adalah admin, arahkan ke dashboard admin
        return redirect()->route('adminDashboard');
    }
}
