<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\AccessLog;

class LogAccess
{
    /**
     * Handle an incoming request.
     * Registra el acceso del usuario a la página.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->user()) {
            AccessLog::create([
                'usuario_id' => $request->user()->id,
                'pagina' => $request->path(),
                'fecha_acceso' => now(),
            ]);
        }

        return $next($request);
    }
}
