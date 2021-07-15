<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Brand;

class ActiveUser
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
       $brand = Brand::whereHas('user', function($q){
            $q->where('active', '=', 0);
        })->get();
        if($brand){
            return redirect()->route('front.index');
        }
            return $next($request);       
    }
}
