<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Brand;
use App\User;


class CreateOneBrand
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
        $brand = Brand::all()->where('user_id', auth()->id());
        if(count($brand) == 1){
            return redirect()->route('user.dashboard');
        }
            return $next($request);       
    }
}
