<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AccessControl
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        $roles = explode('|', $role);
        if ($request->user()) {
            if (!in_array($request->user()->role, $roles)) {
                abort(401);
            }
            return $next($request);
        } else {
            abort(401);
        }
    }
}
