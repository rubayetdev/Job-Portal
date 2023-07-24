<?php

namespace App\Http\Middleware;

use Closure;

class PreventBackMiddleware
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);
        
        // Prevent pages from being cached
        $response->headers->set('Cache-Control', 'nocache, no-store, max-age=0, must-revalidate');
        $response->headers->set('Pragma', 'no-cache');
        $response->headers->set('Expires', 'Sat, 01 Jan 2000 00:00:00 GMT');

        return $response;
    }
}