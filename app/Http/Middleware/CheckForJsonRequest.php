<?php

namespace App\Http\Middleware;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;
use Closure;

class checkForJsonRequest extends Controller
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
        if ($request->expectsJson()) {
            return auth('sanctum')->check()
                ? $next($request)
                : response()->json(['error' => 'Unauthenticated.'], 401);
        }

        return $next($request);
    }
}
