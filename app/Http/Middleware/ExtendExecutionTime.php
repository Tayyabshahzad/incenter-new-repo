<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ExtendExecutionTime
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next, $timeout = 0)
    {
        set_time_limit($timeout);
        ini_set('max_execution_time', $timeout);
    
        return $next($request);
    }
    
}
