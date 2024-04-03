<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TestMiddleware
{
    public function handle(Request $request, Closure $next, int $first, int $second)
    {
        if ($first === $second) {
            return $next($request);
        }
        return $next($request);
    }
}
