<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Redirect;

class AuthMiddleware
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
        //$request->session()->push('user.teams', 'developers');
        //$request->session()->flush();
        //dd($request->session()->exists('user'));
        if (!$request->session()->exists('userToken') && !$request->session()->exists('userDataUser')) {
             //abort(403, "No tienes permisos para el sistema");
             return Redirect::to('login');
        }
        return $next($request);
    }
}
