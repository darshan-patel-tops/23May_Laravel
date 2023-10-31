<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class SellerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // dd("inside middleware");
        // dd(Auth::user());
        // if(Auth::user()->role_as == '1')
        if(Auth::user()->role_as != '1')
        {
            // dd("inside if");
            return redirect('/home')->with('status',"Access Denied As you are not an Seller");
        }
        // else
        // {
        //     dd("inside else");
        // }
        return $next($request);
    }
}
