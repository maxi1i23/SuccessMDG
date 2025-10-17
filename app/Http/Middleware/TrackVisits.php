<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Visit;
use Carbon\Carbon;

class TrackVisits
{
    public function handle(Request $request, Closure $next)
    {
        $path = $request->path();
        $routeName = $request->route()?->getName();

        // 🔒 Ignorer les routes du back-office (Filament)
        if (
            $request->is('admin', 'admin/*', 'filament', 'filament/*') ||
            $request->routeIs('filament.*') ||
            ($routeName && str_starts_with($routeName, 'filament'))
        ) {
            return $next($request);
        }

        // 🧠 Informations visiteur
        $ip = $request->ip();
        $userAgent = $request->userAgent();
        $now = Carbon::now();

        try {
            // 🔍 Dernière visite de cette IP
            $lastVisit = Visit::where('ip_address', $ip)
                ->orderByDesc('created_at')
                ->first();

            // ⏱️ Vérifie si la dernière visite date de moins de 30 minutes
            if (!$lastVisit || $lastVisit->created_at->diffInMinutes($now) >= 30) {
                Visit::create([
                    'ip_address' => $ip,
                    'user_agent' => $userAgent,
                    'page' => $path,
                ]);
            }
        } catch (\Throwable $e) {
            // On évite que le site plante si la table Visit n’existe pas encore
        }

        return $next($request);
    }
}
