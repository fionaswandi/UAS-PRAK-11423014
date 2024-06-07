<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Config as ConfigModel;
use Illuminate\Support\Facades\Auth;

class isMaintaince
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::user();

        if ($user && $user->role == 'admin') {
            return $next($request);
        }

        $maintainceConfig = ConfigModel::where('name', 'maintaince')->first();

        if ($maintainceConfig && intval($maintainceConfig->value) == 1) {
            abort(503);
        }

        return $next($request);
    }
}
