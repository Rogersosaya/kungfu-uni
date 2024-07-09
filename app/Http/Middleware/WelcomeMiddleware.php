<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class WelcomeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->session()->has('password')) {
            // El usuario ya ha ingresado la contraseña correctamente
            
            return $next($request);
        }
    
        if ($request->password == "welcome") {
            // Almacenar la contraseña en la sesión del usuario
            $request->session()->put('password', 'welcome');
    
            return $next($request);
        } else {
            return redirect()->route('no-welcome');
        }
    }
}
