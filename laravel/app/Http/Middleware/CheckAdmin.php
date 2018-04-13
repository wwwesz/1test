<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    //中间键
    public function handle($request, Closure $next)
    {
        if(!session()->has('nick')){
            header('location:'.url('admin/login'));
            exit;
        }
        return $next($request);
    }
}
