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
        if (!$request->user()->hasRole($role)) {
            abort(401, 'This action is unauthorized.');
        }
        return $next($request);
    }
}
