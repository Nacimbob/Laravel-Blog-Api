<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Azar\Exceptions\UnauthorizedException;
class EnsureIsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if( is_null($request->user()) ? true : $request->user()->admin){
            throw new UnauthorizedException();
        }
        return $next($request);
    }
}
