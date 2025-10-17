<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postulation extends Model
{
    use HasFactory;

    protected $fillable = [
        'offre_id',
        'nom',
        'email',
        'telephone',
        'cv',
        'lettre_motivation',
    ];

    // Relation avec l'offre
    public function offre()
    {
        return $this->belongsTo(Offre::class);
    }
}
