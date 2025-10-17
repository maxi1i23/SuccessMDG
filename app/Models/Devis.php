<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Devis extends Model
{
    protected $fillable = [
        'nom',
        'email',
        'telephone',
        'sous_service_id',
        'budget',
        'description_projet',
        'delai',
        'adresse',
        'verification_token', 
        'verified', 
    ];

    // Relation avec sous-service
    public function sousService()
    {
        return $this->belongsTo(SousService::class);
    }
}
