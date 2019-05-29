<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class admin
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
        if(! Auth::user()->role)
        {
            //Session::flash('success', 'You Haven\'t permission');
           // return redirect()->back();
           return redirect('/admin/home');
        }
        return $next($request);
    }
}
