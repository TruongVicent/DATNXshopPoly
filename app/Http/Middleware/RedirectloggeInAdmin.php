<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RedirectloggeInAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // Middleware để chuyển hướng người dùng đã đăng nhập
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();
        if (Auth::user() && $user->hasRole('super_admin')) {
            return $next($request);
        }
        if (Auth::user() && $user->hasRole('admin') || Auth::user() && $user->hasRole('staff')){
            return redirect('/app');
        }
//        if (Auth::user() && $user->hasRole('')){
//             abort(403,'Bạn không có quyền đăng nhâp');
//        }
        return $next($request);
    }
}
