<?php

namespace App\Http\Middleware;

use Closure;

class OnEnter
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
        if (app()->environment() !== 'production') {
            \Artisan::call('view:clear');
        }

        return $next($request);
    }
}
