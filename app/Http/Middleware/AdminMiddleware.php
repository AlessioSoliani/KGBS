<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        {
        // Verifica se l'utente è autenticato
        if (auth()->check() && auth()->user()->is_admin) {
            return $next($request);
        }

        // Se non è autenticato o non è amministratore, reindirizza
        return redirect('/')->with('error', 'Accesso negato. Non sei un amministratore.');
    }
    }
}
