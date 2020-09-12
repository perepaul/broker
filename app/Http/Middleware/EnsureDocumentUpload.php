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

        if($user = auth()->user()){
            if($user->is_admin){
                return $next($request);
            }
            if(count($user->documents) > 0){
                if($user->accepted == 1 || $request->route()->named('users.document.upload')){
                session()->forget(['info','idTab']);
                return $next($request);
                }
                session()->forget(['info']);
                session()->put('idTab',true);
                session()->put('info','Your Document(s) are in review, we will notify you when we are done.');
                return redirect()->route('profile');
            }
            session()->put('idTab',true);
            session()->put('info','Upload your country\'s valid means of identication, or driver\'s license and/or international passport for verification');
            return redirect()->route('profile');
        }
        return redirect()->route('login');
    }
}
