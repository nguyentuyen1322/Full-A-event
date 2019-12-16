<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class CheckLogin
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
        if(Auth::guard($guard)->check()){
            if(Auth::user()->type == 2){
                return $next($request);
            }
            return redirect('admin/login')->with('thongbao','Bạn không có quyền truy cập !');
          
        }
        return redirect('admin/login');
    }
}
