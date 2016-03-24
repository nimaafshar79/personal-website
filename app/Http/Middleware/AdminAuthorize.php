<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class AdminAuthorize
{
    private $adminId = "1", $adminUsername = "admin";

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check() && $this->isAdmin(Auth::user())) {
            return $next($request);
        } else {
            Auth::logout();
            return redirect('login')->withErrors("برای دسترسی به آن صفحه باید ادمین باشید");
        }

    }

    public function isAdmin(User $user)
    {
        return (Auth::user()->id == $this->adminId && Auth::user()->username == $this->adminUsername);
    }
}
