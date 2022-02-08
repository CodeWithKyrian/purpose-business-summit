<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckApprovalStatus
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
        if (!$request->user()->can('access-dashboard')) {
            auth()->logout();
            return redirect()->route('login')->with('auth-error', 'Your account has not been approved by the admin!');
        }
        return $next($request);
    }
}
