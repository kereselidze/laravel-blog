<?php

namespace App\Http\Middleware;

use Closure;

class IpDefenceMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    protected $ips = [
        '127.0.0.1'
    ];

    public function handle($request, Closure $next)
    {
        if (in_array($request->ip(), $this->ips)) {
            config('app.debug', TRUE);

        } else {
            config('app.debug', FALSE);
        }

        return $next($request);
    }
}
