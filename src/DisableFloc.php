<?php

namespace Spatie\DisableFloc;

use Closure;
use Illuminate\Http\Response;

class DisableFloc
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        if ($response instanceof Response) {
            if (! $response->headers->has('Permissions-Policy')) {
                $response->header('Permissions-Policy', 'interest-cohort=()');
            }
        }

        return $response;
    }
}
