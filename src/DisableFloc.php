<?php

namespace Spatie\DisableFloc;

use Closure;

class DisableFloc
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        $response->header('Permissions-Policy', 'interest-cohort=()');

        return $response;
    }
}
