<?php

namespace App\Http\Middleware;
use Closure;
use Auth;

class CheckAddevent
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if(Auth::guard($guard)->check() || $request->cookie('loginfb') || $request->cookie('logingg')){
            $checkuserlogin = '';
            if($request->cookie('loginfb'))
            $checkuserlogin = $request->cookie('loginfb');
            elseif($request->cookie('logingg'))
            $checkuserlogin = $request->cookie('logingg');
            else
            $checkuserlogin = Auth::user()->type == 1 || 2;
            if($checkuserlogin){
                return $next($request);  
            }
            return redirect('pages/login');
        }
        return redirect('pages/login');
    }
}
