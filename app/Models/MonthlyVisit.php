<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonthlyVisit extends Model
{
    use HasFactory;

    protected $fillable = [
        'year',
        'month',
        'total_visits',
    ];

    /**
     * Incrémente le compteur de visites pour le mois en cours.
     */
    public static function incrementVisit(): void
    {
        $year = now()->year;
        $month = now()->month;

        // On cherche la ligne correspondant à ce mois et cette année
        $visit = self::firstOrCreate(
            ['year' => $year, 'month' => $month],
            ['total_visits' => 0]
        );

        // On incrémente le compteur
        $visit->increment('total_visits');
    }
}
