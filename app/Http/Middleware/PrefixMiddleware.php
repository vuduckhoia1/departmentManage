<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PrefixMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $pathInfo = $request->getPathInfo();
        $pathPrefix = explode('/', $pathInfo);
        if($pathPrefix == 'ad') {
            $request['prefix'] = 'ad';
        }
        else if($pathPrefix == 'ma') {
            $request['prefix'] = 'ma';
        }
        else {
            $request['prefix'] = 'em';
        }
        return $next($request);
    }
}
