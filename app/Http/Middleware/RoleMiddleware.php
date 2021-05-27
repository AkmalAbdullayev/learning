<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    public function __construct()
    {
        //
    }

    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @param $role
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if (auth()->user()) {
            if (auth()->user()->role->name === $role) {
                return $next($request);
            }
        }

        return abort(403, "This action is unauthorized.");
    }
}
