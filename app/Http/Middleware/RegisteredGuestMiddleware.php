<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RegisteredGuestMiddleware
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

     //   if(  $request->session()->pull('guest_email', null) )
        
        return $next($request);
      //  else return redirect()->route('hello')->with('error', 'Antes de ingresar registra tus datos por favor, o ingresa tu correo solamente si te registraste antes');
    }
}
