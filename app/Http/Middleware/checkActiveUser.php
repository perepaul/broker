<?php

namespace App\Http\Middleware;

use Closure;

class checkActiveUser
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
        if(auth()->check())
        {
            if(!auth()->user()->status && !auth()->user()->is_admin)
            {
                session()->flash('error','Account disabled, contact our team via live chat support');
                auth()->logout();
                return redirect()->route('login');
            }
        }
        return $next($request);
    }
}
