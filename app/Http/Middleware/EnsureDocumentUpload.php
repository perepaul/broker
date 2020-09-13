<?php

namespace App\Http\Middleware;

use Closure;

class EnsureDocumentUpload
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
        session()->forget(['idTab','info']);
        if($user = auth()->user()){
            if($user->is_admin){
                return $next($request);
            }else if($user->accepted == 1){
                return $next($request);
            }else if($request->route()->named('users.document.upload')){
                return $next($request);
            }else if(count($user->documents) > 0 && $user->accepted == 0){
                session()->put('idTab',true);
                session()->put('info','Your Document(s) are in review, we will notify you when we are done.');
                return redirect()->route('profile');
            }else{
                session()->put('idTab',true);
                session()->put('info','Upload your country\'s valid means of identication, or driver\'s license and/or international passport for verification');
                return redirect()->route('profile');
            }

        }
        return redirect()->route('login');
    }
}
