<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LecturerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()){
            if(Auth::user()->role=='0'){
                // 1 -> admin
                // 0 -> user
                return redirect('students/dashboard')->with('status','Access denied. You are not a lecturer');
            }
            else if(Auth::user()->role=='2'){
                return $next($request);            }
            else if(Auth::user()->role=='3'){
                return redirect('workers/dashboard')->with('status','Access denied. You are not a lecturer');
            }
            else{
                return redirect('admin/dashboard')->with('status','Access denied. You are not a lecturer');  
            }
        }
        else{

            return redirect('/login')->with('status','Please login first');
        }
    }
}
