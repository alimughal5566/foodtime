<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class UserTypeCheacking
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$userType)
    {

        if (auth::check()) {

            if (auth::user()['type'] === $userType) {
                return $next($request);
            }
            else{
                return redirect()->route('denied');
            }
        }
        else {
            return redirect()->route('login');
        }
    }
}
