<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    // Default table will be 'equipes' per Laravel convention
    protected $fillable = ['nom', 'role', 'photo', 'bio', 'reseaux'];

    protected $casts = [
        'reseaux' => 'array',
    ];
}

