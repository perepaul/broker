<?php

namespace App\Http\Middleware;

use Closure;

class checkUser
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
        // dd($request->route()->getName());
        if(auth()->check()){
            if(auth()->user()->is_admin)
            {
                if(
                    in_array($request->route()->getName(),[
                        'users.delete',
                        'users.update',
                    ])
                ){
                    return $next($request);
                }
                if($request->ajax())
                {
                    return response()->json([
                        'success'=>false,
                        'message'=>'access denied'
                    ],403);
                }else{
                    return redirect('/admin');
                }
            }
        }
        return $next($request);
    }
}
