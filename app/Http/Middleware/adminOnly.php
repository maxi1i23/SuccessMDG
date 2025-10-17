<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminOnly
{
    /**
     * Ensure the authenticated user is an admin.
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->user() && ($request->user()->isAdmin() || $request->user()->isEditor())) {
            return $next($request);
        }
        abort(403, 'Accès interdit');
    }
}