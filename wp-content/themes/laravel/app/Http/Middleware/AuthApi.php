<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Hash;

class AuthApi
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
        $check = Hash::check(wp_create_nonce('token'), $request->header('Authorization'));
        if ($check) {
            return $next($request);
        } else {
            return response()->json(['message' => 'unauthorized'], 401);
        }
    }
}
