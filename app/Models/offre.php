<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'type_contrat',
        'contenu',
        'experience',
        'lieu',
        'mission',
        'competences',
        'qualites',
    ];

    protected $casts = [
        'mission' => 'array',
        'competences' => 'array',
        'qualites' => 'array',
        'is_new' => 'boolean', // si tu utilises ce champ pour "Nouveau"

    ];


    // Relation avec les postulations
    public function postulations()
    {
        return $this->hasMany(Postulation::class);
    }
}
