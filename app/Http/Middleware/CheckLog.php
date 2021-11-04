<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckLog
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
        if (!self::isLoggedOn()){
            return redirect('/login')->with('event_fail', 'Veuillez vous connecter afin d\'accéder à ce contenu.');
        } else {
            return $next($request);
        }
    }

    public static function isLoggedOn(): bool{
        return (!is_null(auth()->user()));
    }
}
