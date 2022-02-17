<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Userdata
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
       if($request->api_user !==env('checkpassword')){
           return response()->json(['message'=>'Unauthentication']);
       }
        return $next($request);
    }
}
