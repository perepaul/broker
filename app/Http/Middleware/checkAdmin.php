<?php

namespace App\Http\Middleware;

use Closure;

class checkAdmin
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
        if(auth()->check()){
            if(!auth()->user()->is_admin)
            {
                if($request->ajax())
                {
                    return response()->json([
                        'success'=>false,
                        'message'=>'access denied'
                    ],403);
                }else{
                    return redirect('/users');
                }
            }
        }
        return $next($request);
    }
}
