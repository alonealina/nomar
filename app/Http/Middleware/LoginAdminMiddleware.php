<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LoginAdminMiddleware
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
        // 未ログイン
        if(!session()->has('login_id')){
            return redirect(url('club-nomar/admin/login'));
        }

        return $next($request);
    }
}
