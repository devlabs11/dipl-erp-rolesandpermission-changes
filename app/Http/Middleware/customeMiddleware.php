<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class customeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    

//     public function handle(Request $request, Closure $next, ...$guards)
//     {
        
//         // dd($request);
//     $guards = empty($guards) ? [null] : $guards;
//     if ($request->isMethod('post') || $request->isMethod('get')) {
//         foreach ($guards as $guard) {
//             if (!Auth::guard($guard)->check()) {
            
//                 return redirect('/');
//             }
//         }
//     }
//     return $next($request);
// }





public function handle($request, Closure $next)
{

    // dd($request->server->get('REQUEST_METHOD'));
    

    if (!Auth::user()) {
      
    //  dd(Auth::check());
        return redirect('/');
    }
    //  dd(Auth::user()->toArray());

    return $next($request)->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
}
}