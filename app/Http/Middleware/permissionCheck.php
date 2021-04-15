<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class permissionCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $roles)
    {
        
        
        $role = explode('|',$roles );
        if(in_array(Auth::user()->getpermission(), $role)){
            return $next($request);
        }
        return redirect()->route('student');
    }
}
