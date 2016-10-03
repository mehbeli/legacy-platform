<?php

namespace App\Http\Middleware;

use Closure;

class BusinessMiddleware
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
        if (!$request->user()->canAccess($request->business)) {
            return response(401);
        }

        return $next($request);
    }
}
