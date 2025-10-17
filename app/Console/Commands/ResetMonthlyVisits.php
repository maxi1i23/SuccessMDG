<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Visit;
use App\Models\MonthlyVisit;
use Carbon\Carbon;

class ResetMonthlyVisits extends Command
{
    protected $signature = 'visits:reset-month';
    protected $description = 'Sauvegarde et réinitialise le compteur de visites à la fin du mois';

    public function handle()
    {
        $now = Carbon::now();

        // Compter toutes les visites du mois courant
        $total = Visit::whereYear('created_at', $now->year)
            ->whereMonth('created_at', $now->month)
            ->count();

        // Sauvegarder le total dans monthly_visits
        MonthlyVisit::updateOrCreate(
            ['year' => $now->year, 'month' => $now->month],
            ['total_visits' => $total]
        );

        // Supprimer les anciennes visites
        Visit::whereYear('created_at', $now->year)
            ->whereMonth('created_at', $now->month)
            ->delete();

        $this->info("Compteur de visites sauvegardé et réinitialisé pour {$now->format('F Y')} ({$total} visites).");
    }
}
